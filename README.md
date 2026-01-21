# template-app

## Overview

In this project, **Laravel 12** for the API back-end and **Nuxt 3** for the client-side of the application.

## Requirements

- **PHP 8.2** is the minimum-required PHP version in Laravel 12.
- **20.18.1** for Node.js. (Refer **Installation** to use **NVM** to manage multiple Node.js versions)
- `npm install -g win-node-env`

## Installation

### Laravel

To install this project, please follow the steps below:

1. Clone this repository to your local machine.
2. Run the command `npm install && npm run build`
3. Check that the values of the following variables in `.env` are correct:

    ```
    APP_URL=http://template-app.test

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. Run the following commands in root folder.
    ```
    php artisan key:generate
    php artisan migrate:fresh
    php artisan storage:link
    ```
5. Create a `.env` file at `/client` folder.
6. Add these variables in `.env`:

    ```
    APP_ENV=development
    APP_URL=http://template-app.test
    ```

7. Run the command `npm install && npm run generate`
8. Start the development server from `/client` folder with command:
    ```
    npm run dev
    ```
