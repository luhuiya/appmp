<?php

use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_method')->delete();
        
        \DB::table('payment_method')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '01',
                'name' => 'Paypal',
                'is_active' => true,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '02',
                'name' => '1stopWalet',
                'is_active' => true,
            ),
        ));
        
        
    }
}