<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\WebSockets\UsersWebSocket;

class WebSocketServer extends Command
{
    protected $signature = 'websocket:serve';
    protected $description = 'Start WebSocket server to serve user data.';

    public function handle()
    {
        $port = 8080; // Change this to the desired port number

        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new UsersWebSocket()
                )
            ),
            $port
        );

        $this->info('WebSocket server started on port ' . $port);
        $server->run();
    }
}

