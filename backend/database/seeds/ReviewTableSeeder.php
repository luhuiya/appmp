<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('review')->delete();
        
        \DB::table('review')->insert(array (
            0 => 
            array (
                'id' => 9,
                'user_id' => 18,
                'product_id' => 78,
                'description' => 'testing',
                'created_at' => '2017-07-07 09:12:33',
                'updated_at' => '2017-07-07 09:12:33',
                'rating' => 3,
            ),
            1 => 
            array (
                'id' => 8,
                'user_id' => 18,
                'product_id' => 78,
                'description' => 'testing3',
                'created_at' => '2017-07-07 09:11:43',
                'updated_at' => '2017-07-10 02:00:25',
                'rating' => 2,
            ),
        ));
        
        
    }
}