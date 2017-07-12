<?php

use Illuminate\Database\Seeder;

class HomeLayoutTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_layout')->delete();
        
        \DB::table('home_layout')->insert(array (
            0 => 
            array (
                'id' => 3,
                'layout_name' => 'fasfsaf',
                'layout_type' => 1,
                'position' => 2,
                'category' => 'Software',
                'subcategory' => 'Android',
                'created' => '2016-10-28 10:38:03',
            ),
        ));
        
        
    }
}