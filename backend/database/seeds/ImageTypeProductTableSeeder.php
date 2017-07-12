<?php

use Illuminate\Database\Seeder;

class ImageTypeProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('image_type_product')->delete();
        
        \DB::table('image_type_product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'prev',
                'name' => 'Previews Pictures',
            ),
        ));
        
        
    }
}