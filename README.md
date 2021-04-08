<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Laravel 8, PHP 8, Mysql 8

## Use

To get started, make sure you have [Docker installed](https://docs.docker.com/) on your system and [Docker Compose](https://docs.docker.com/compose/install/), and then clone this repository.

1. Clone this project:

   ```sh
   git clone https://github.com/jsmilenium/vesti_laravel8
   ```

2. Generate your own `.env` to docker compose with the next command:

   ```sh
   cp .env.example .env
   ```

3. Build the project with the next commands:

   ```sh
   docker-compose up --build
   ```
   
4. Create the tables with the next command:
   
   ```sh
   docker exec app php artisan migrate
   ```

## Api

It's important to use a tool like [Postman](https://www.postman.com//) to test the api

1. Show all products

   ```sh
   GET - http://localhost/api/produtos
   ```

2. Show one product

   ```sh
   GET - http://localhost/api/produtos/id
   ```

3. Create new product

   ```sh
   POST - http://localhost/api/produtos
   ```

4. Update one product

   ```sh
   POST - http://localhost/api/produtos/id
   ```

5. Delete one product

   ```sh
   DELETE - http://localhost/api/produtos/id
   ```

## Test

   ```sh
   docker exec app php artisan test
   ```
