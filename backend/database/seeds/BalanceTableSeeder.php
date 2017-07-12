<?php

use Illuminate\Database\Seeder;

class BalanceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('balance')->delete();
        
        \DB::table('balance')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 23,
                'balance' => '0.00',
                'last_balance' => '0.00',
                'last_usage' => '2016-11-18 07:39:07',
            ),
            1 => 
            array (
                'id' => 6,
                'user_id' => 24,
                'balance' => '0.00',
                'last_balance' => '0.00',
                'last_usage' => '2016-11-23 07:31:43',
            ),
            2 => 
            array (
                'id' => 7,
                'user_id' => 26,
                'balance' => '0.00',
                'last_balance' => '0.00',
                'last_usage' => '2016-11-30 07:19:39',
            ),
            3 => 
            array (
                'id' => 8,
                'user_id' => 27,
                'balance' => '0.00',
                'last_balance' => '0.00',
                'last_usage' => '2016-12-01 06:08:01',
            ),
            4 => 
            array (
                'id' => 2,
                'user_id' => 19,
                'balance' => '7500.00',
                'last_balance' => '20000.00',
                'last_usage' => '2016-12-09 03:13:01',
            ),
            5 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'balance' => '50000.00',
                'last_balance' => '7500.00',
                'last_usage' => '2016-12-13 06:37:10',
            ),
            6 => 
            array (
                'id' => 9,
                'user_id' => 28,
                'balance' => '0.00',
                'last_balance' => '0.00',
                'last_usage' => '2017-01-10 02:52:21',
            ),
        ));
        
        
    }
}