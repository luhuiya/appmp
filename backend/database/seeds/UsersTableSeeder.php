<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'andang r dimas',
                'email' => 'andangrdimas@gmail.com',
                'password' => '$2y$10$CFWZGedgO/NnZzYU6AsMHuH9a0V8i6HlfDo9LGhMKy/bd/Lz6AIcO',
                'remember_token' => '0yUPkgZ0n3PVU7VTf4QMBC7qxHiKlTBetvX5333fA2aDimSQ6VJYbYTJSa6t',
                'created_at' => '2016-12-22 03:07:34',
                'updated_at' => '2016-12-22 03:07:42',
                'role' => 'ROLE_USER',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'dsadasd',
                'email' => 'sada@asfsaf.com',
                'password' => '$2y$10$fXCp4D600zjQkz0lfv826ef03PrdgApgzvVW2aUd9cePkmoHuX2Uy',
                'remember_token' => NULL,
                'created_at' => '2017-01-12 08:05:16',
                'updated_at' => '2017-01-12 08:05:16',
                'role' => NULL,
            ),
            2 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$w5r37eAAuIUUrUw2uu.qNuzQSwHYMAzGsBay3KW0mgZDeYXesfUyi',
                'remember_token' => '3BkTWhG2IMdkMFI7elAz91UBGh8nKkpvQ0W4ZCFWaGs4BsidqPoUprDQajx2',
                'created_at' => '2016-12-23 01:39:20',
                'updated_at' => '2017-01-16 06:21:53',
                'role' => 'ROLE_ADMIN',
            ),
            3 => 
            array (
                'id' => 16,
                'name' => 'addin',
                'email' => 'addin@mitrais.com',
                'password' => '$2y$10$bDUMzujcYA1MfcF5qPd3Oer49EejK5cjxLzZive42N9OomZsJZcM2',
                'remember_token' => NULL,
                'created_at' => '2017-07-11 06:52:26',
                'updated_at' => '2017-07-11 06:52:26',
                'role' => NULL,
            ),
        ));
        
        
    }
}