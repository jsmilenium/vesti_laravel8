<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Laravel 8, PHP 8, Mysql 8

## Commands

```sh
1 -  docker-compose up -d --build
```

```sh
2 - docker exec app php artisan migrate
```

## Api

Show all products

```sh
GET - /api/produtos
```

Show one product

```sh
GET - /api/produtos/id
```

Create new product

```sh
POST - /api/produtos
```

Update one product

```sh
POST - /api/produtos/id
```

Delete one product

```sh
DELETE - /api/produtos/id
```

## Test

```sh
docker exec app php artisan test
```
