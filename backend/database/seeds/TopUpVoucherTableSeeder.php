<?php

use Illuminate\Database\Seeder;

class TopUpVoucherTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('top_up_voucher')->delete();
        
        \DB::table('top_up_voucher')->insert(array (
            0 => 
            array (
                'id' => 2,
                'code' => 'TU50',
                'price' => '50000.00',
                'name' => 'Top Up 1 Stop Wallet 50000',
                'is_active' => true,
            ),
            1 => 
            array (
                'id' => 3,
                'code' => 'TU100',
                'price' => '100000.00',
                'name' => 'Top Up 1 Stop Wallet 100000',
                'is_active' => true,
            ),
            2 => 
            array (
                'id' => 1,
                'code' => 'TU25',
                'price' => '25000.00',
                'name' => 'Top Up 1 Stop Wallet 25000',
                'is_active' => true,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'TU10',
                'price' => '10000.00',
                'name' => 'Top Up 1 Stop Wallet 10000',
                'is_active' => true,
            ),
        ));
        
        
    }
}