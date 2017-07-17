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
- make sure you update this section accordingly based on your database environment
    ```
    # This for Postgres
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=osc
    DB_USERNAME=postgres
    DB_PASSWORD=root
    ```
    
    ```
    # This for mysql
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=osc
    DB_USERNAME=root
    DB_PASSWORD=
    ```
- If using mysql then update `app/config/database.php` for mysql section. Change `strict` value to `false`
- create the database, named according to the `DB_DATABASE`
- run this command on terminal `php artisan migrate`
- run `php artisan db:seed` 
- run `php artisan serve --host 0.0.0.0` then open `localhost:8000` on the browser
- to investigate the error log, run this command `php artisan tail`



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
- If you want to access the frontend using ip then update `package.json` on the root folder and update start command to look like this
    ``` 
    "scripts": {
        "start": "webpack-dev-server --hot --inline --colors --progress --host 172.19.11.126 --content-base --port 8020"
      },
    ```
    and make sure you update the IP with your current IP