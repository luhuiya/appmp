# OneStopClick

## BACKEND

### Server Requirements

- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

### Software Requirement

- PHP Composer
- XAMPP (Windows)
- Postgres / MySql


### Installation

- Make sure to install PHP by installing XAMPP then install PHP Composer using installer.
- Open terminal and go to `backend` directory
- execute command `composer install`
- after finish then copy file `.env-example` and rename to `.env`
- make sure you update this section accordingly
    ```
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=osc
    DB_USERNAME=postgres
    DB_PASSWORD=root
    ```
- create the database
- run this command on terminal `php artisan migrate`
- then run `php artisan migrate:rollback --step 7` to undo adding foreign key because this will prevent us to insert seed data
- run `php artisan db:seed` 
- run `php artisan migrate` again to add foreign key relations
- run `php artisan serve --host 0.0.0.0` then open `localhost:8000` on the browser




## FRONTEND

### Software Requirement

- Node.js
- NPM


### Installation

- open terminal then go to `frontend` directory
- run `npm install` to install dependencies
- change the url on the file `frontend\app\configs\backend.js` to your backend url, mostly `localhost:8000`
- run `npm start` to start the frontend
- open `localhost:8020` on the browser