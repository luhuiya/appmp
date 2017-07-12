<?php

use Illuminate\Database\Seeder;

class PaymentTokenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_token')->delete();
        
        
        
    }
}