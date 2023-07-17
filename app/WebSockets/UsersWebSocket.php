<?php
namespace App\WebSockets;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use App\Models\User;
use Redis;

class UsersWebSocket implements MessageComponentInterface
{
    protected $clients;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage();
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
    }

    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        $conn->close();
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        $users = User::all();

        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                // Add more user attributes here if needed
            ];
        }

        $response = [
            'type' => 'users_data',
            'data' => $data,
        ];

        foreach ($this->clients as $client) {
            $client->send(json_encode($response));
        }
    }

    protected function sendToAll($message)
    {
        foreach ($this->clients as $client) {
            $client->send($message);
        }
    }
}




