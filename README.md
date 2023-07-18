<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instructions to Run the Project

Clone or download the project source code to your local machine.
Install the required dependencies by running the following command in the project directory:

## composer update at first
- composer update

## Configure the database connection by copying the .env.example file and renaming it to .env. Update the database credentials in the .env file to match your local environment.

## Generate an application key by running the following command:

- php artisan key:generate

## Run the database migrations to create the necessary tables by executing the following command:

- php artisan migrate

## Generate the user dataset using the seeder:

- php artisan db:seed --class=UsersTableSeeder

## Start the Laravel development server:

- php artisan serve

## In a separate terminal window, start the WebSocket server:

- php artisan websocket:serve
- Now connect to the WebSocket server at ws://localhost:8080.

## Run the Laravel queue worker:

- php artisan queue:work
