# Laravel website with CRUD blog
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.com/github/PauliusU/CRUD_blog_Laravel"><img src="https://travis-ci.com/PauliusU/CRUD_blog_Laravel.svg?branch=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

This is the source code for Laravel website with a CRUD blog application. It also includes full authentication and file uploading.

**For deployed version visit:** [quiet-fjord-52051.herokuapp.com](https://quiet-fjord-52051.herokuapp.com)

## Tech Stack

The following technologies were used in the project:
* [Laravel 8](https://laravel.com) - a web application framework with expressive, elegant syntax.
* [Bootstrap 4.5](https://getbootstrap.com) - CSS framework.
* [Composer](https://getcomposer.org) - a Dependency Manager for PHP.
* [Travis CI](https://travis-ci.com/) - continuous integration service used to build and test project.
* [Heroku](https://www.heroku.com) - Cloud Application Platform for hosting.

## Running project

Visit: [quiet-fjord-52051.herokuapp.com](https://quiet-fjord-52051.herokuapp.com)

OR

Run Laravel project locally:

1. Clone GitHub repo for this project locally
    ```bash
    git clone https://github.com/PauliusU/CRUD_blog_Laravel.git
    ```
2. cd into project
    ```bash
    cd CRUD_blog_Laravel
    ```
3. Install Composer Dependencies
    ```bash
    composer install
    ```
4. Create a copy of your .env file
    ```bash
    cp .env.example .env
    ```
5. Generate an app encryption key
    ```bash
    php artisan key:generate
    ```
6. Create an empty database for the application
    ```bash
    mysql -u username -p
    ```
    ```bash
    CREATE DATABASE laravel;
    ```
7. In the .env file, add database information to allow Laravel to connect to the database

    In the .env file fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` options to match the credentials of the database you just created

8. Migrate the database
    ```bash
    php artisan migrate
    ```
9. Run application on the PHP development server
    ```bash
    php artisan serve
    ```
10. You can now access your project at localhost:8000

## Database
The SQL dump is in _SQL/crud_blog_laravel.sql
