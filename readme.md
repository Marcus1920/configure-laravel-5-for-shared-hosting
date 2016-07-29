# Configure Laravel 5 for Shared Hosting

There are a few things that you have to change in Laravel to make it work on shared hosting. The most important thing is to change the public path and correctly bootstrap the application.

## Installation

Clone repository to your drive and type in terminal there:

```
cd laravel_project
composer install
```

## Configuration

Copy file `.env.example` to `.env` file:

```
cp .env.example .env
```

and change the `APP_KEY` in `.env` using:

```
php artisan key:generate
```

## Running

From terminal type:

```
php artisan serve
```

You should get an address to open in your browser like http://localhost:8000.

**Have fun!**