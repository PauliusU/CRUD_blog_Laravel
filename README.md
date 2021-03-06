# Laravel website with CRUD blog
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.com/github/PauliusU/CRUD_blog_Laravel"><img src="https://travis-ci.com/PauliusU/CRUD_blog_Laravel.svg?branch=master" alt="Build Status"></a>
<a href="https://github.com/PauliusU/CRUD_blog_Laravel/blob/master/LICENSE"><img src="https://img.shields.io/badge/License-MIT-blue.svg" alt="MIT license"></a>
</p>

This is the source code for Laravel website with a CRUD blog application. It also includes full authentication and file uploading.

**For deployed version visit: [laravel-blog-crud.herokuapp.com](https://laravel-blog-crud.herokuapp.com/)** (this version does not support file uploading due to Heroku limitations)

## Tech Stack

The following technologies were used in the project:
* [Laravel 8](https://laravel.com) - a web application framework with expressive, elegant syntax.
* [Bootstrap 4.5](https://getbootstrap.com) - CSS framework.
* [Composer](https://getcomposer.org) - a Dependency Manager for PHP.
* [MySQL](https://www.mysql.com/) -  an open-source relational database management system.
* [Travis CI](https://travis-ci.com/) - continuous integration service used to build and test project.
* [Heroku](https://www.heroku.com) - Cloud Application Platform for hosting.

## Running project

**Visit: [laravel-blog-crud.herokuapp.com](https://laravel-blog-crud.herokuapp.com/)** (this version does not support file uploading due to Heroku limitations)

**OR**

Run Laravel project locally (supports all features):

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
The SQL dump with sample data is in _SQL/crud_blog_laravel.sql
