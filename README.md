# Simple project to accomplish Cloud Computing task on LKS SMK 2020

## Run using docker

```bash
docker-compose --env-file ./laravel/.env up
```

## Laravel

Create new project using composer, `web` is the directory name, can be change as anything

```bash
composer create-project --prefer-dist laravel/laravel web "5.8.*"
```

Create authentication scaffolding

```bash
php artisan make:auth
```

Migrate schema to database

```bash
php artisan migrate
```

Create new model with schema

```bash
php artisan make:model Book -m
```

Change schema in `laravel/database/migrations` and then migrate new schema to database

```bash
php artisan migrate
```
