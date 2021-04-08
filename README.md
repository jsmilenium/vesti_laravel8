<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Remember

The configuration of the database .env

```dotenv
# .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_user
DB_PASSWORD=db_password
DB_ROOT_PASSWORD=secret
```

## Commands

```sh
1 - composer install
```

```sh
2 - cp .env.example .env
```

```sh
3 - php artisan key:generate
```

```sh
4 - php artisan migrate
```

```sh
5 - php artisan serve
```

## API

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
PUT - /api/produtos/id
```

Delete one product

```sh
DELETE - /api/produtos/id
```
