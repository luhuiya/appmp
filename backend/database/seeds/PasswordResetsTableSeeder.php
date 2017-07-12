<?php

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'andangrdimas@gmail.com',
                'token' => 'c3aed4cc6e85ce5f371216dff63c8c5a0d5ba2bea6fbb4fb5531d8257f55e757',
                'created_at' => '2016-12-22 03:08:01',
            ),
        ));
        
        
    }
}