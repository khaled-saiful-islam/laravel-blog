# Laravel-Blog
A blog developed with Laravel 8, Jetstream and Livewire.

## How to setup and run:
After clone or download this repository, next step is install all dependency required by laravel.

```shell
# install composer-dependency
$ composer install
# install npm package
$ npm install
# build dev 
$ npm run dev
```

Before we start web server make sure we already generate app key, configure `.env` file and do migration.

```shell
# create copy of .env
$ cp .env.example .env
# create laravel key
$ php artisan key:generate
# laravel migrate
$ php artisan migrate
# start server at port:8000
$ php artisan serve
```

