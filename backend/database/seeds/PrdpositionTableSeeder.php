<?php

use Illuminate\Database\Seeder;

class PrdpositionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prdposition')->delete();
        
        \DB::table('prdposition')->insert(array (
            0 => 
            array (
                'id' => 35,
                'product_id' => 59,
                'position' => 0,
                'category' => 'Sofware',
                'subcategory' => 'Android',
                'position_top' => 0,
                'created' => '2016-10-27 16:51:51',
            ),
            1 => 
            array (
                'id' => 36,
                'product_id' => 61,
                'position' => 0,
                'category' => '4',
                'subcategory' => '3',
                'position_top' => 0,
                'created' => '2016-11-02 08:51:45',
            ),
            2 => 
            array (
                'id' => 37,
                'product_id' => 62,
                'position' => 0,
                'category' => '4',
                'subcategory' => '3',
                'position_top' => 0,
                'created' => '2016-11-02 09:01:18',
            ),
            3 => 
            array (
                'id' => 38,
                'product_id' => 63,
                'position' => 0,
                'category' => '4',
                'subcategory' => '3',
                'position_top' => 0,
                'created' => '2016-11-02 09:03:35',
            ),
            4 => 
            array (
                'id' => 39,
                'product_id' => 64,
                'position' => 0,
                'category' => '4',
                'subcategory' => '2',
                'position_top' => 0,
                'created' => '2016-11-02 09:11:02',
            ),
            5 => 
            array (
                'id' => 40,
                'product_id' => 66,
                'position' => 0,
                'category' => '4',
                'subcategory' => '2',
                'position_top' => 0,
                'created' => '2016-11-02 09:16:27',
            ),
            6 => 
            array (
                'id' => 41,
                'product_id' => 67,
                'position' => 0,
                'category' => '4',
                'subcategory' => '2',
                'position_top' => 0,
                'created' => '2016-11-02 09:19:13',
            ),
            7 => 
            array (
                'id' => 42,
                'product_id' => 68,
                'position' => 0,
                'category' => '4',
                'subcategory' => '3',
                'position_top' => 0,
                'created' => '2016-11-02 09:24:32',
            ),
            8 => 
            array (
                'id' => 43,
                'product_id' => 69,
                'position' => 0,
                'category' => '4',
                'subcategory' => '2',
                'position_top' => 0,
                'created' => '2016-11-02 09:30:14',
            ),
            9 => 
            array (
                'id' => 44,
                'product_id' => 70,
                'position' => 0,
                'category' => '6',
                'subcategory' => '4',
                'position_top' => 0,
                'created' => '2016-11-02 10:06:25',
            ),
            10 => 
            array (
                'id' => 45,
                'product_id' => 71,
                'position' => 0,
                'category' => NULL,
                'subcategory' => NULL,
                'position_top' => 0,
                'created' => '2016-11-02 10:12:55',
            ),
            11 => 
            array (
                'id' => 46,
                'product_id' => 72,
                'position' => 0,
                'category' => '6',
                'subcategory' => '4',
                'position_top' => 0,
                'created' => '2016-11-02 10:14:45',
            ),
            12 => 
            array (
                'id' => 47,
                'product_id' => 73,
                'position' => 0,
                'category' => '6',
                'subcategory' => '4',
                'position_top' => 0,
                'created' => '2016-11-02 10:15:38',
            ),
            13 => 
            array (
                'id' => 48,
                'product_id' => 74,
                'position' => 0,
                'category' => '6',
                'subcategory' => '4',
                'position_top' => 0,
                'created' => '2016-11-02 10:19:21',
            ),
            14 => 
            array (
                'id' => 49,
                'product_id' => 75,
                'position' => 0,
                'category' => '3',
                'subcategory' => '6',
                'position_top' => 0,
                'created' => '2016-11-02 11:24:00',
            ),
            15 => 
            array (
                'id' => 51,
                'product_id' => 77,
                'position' => 0,
                'category' => NULL,
                'subcategory' => NULL,
                'position_top' => 0,
                'created' => '2016-11-02 12:59:42',
            ),
            16 => 
            array (
                'id' => 52,
                'product_id' => 78,
                'position' => 0,
                'category' => NULL,
                'subcategory' => NULL,
                'position_top' => 0,
                'created' => '2016-11-02 14:18:27',
            ),
            17 => 
            array (
                'id' => 58,
                'product_id' => 122,
                'position' => 0,
                'category' => '4',
                'subcategory' => '3',
                'position_top' => 0,
                'created' => '2016-11-03 14:53:14',
            ),
            18 => 
            array (
                'id' => 59,
                'product_id' => 123,
                'position' => 0,
                'category' => '4',
                'subcategory' => '3',
                'position_top' => 0,
                'created' => '2016-11-03 15:17:52',
            ),
            19 => 
            array (
                'id' => 80,
                'product_id' => 144,
                'position' => 0,
                'category' => '5',
                'subcategory' => '8',
                'position_top' => 0,
                'created' => '2016-12-05 03:47:52',
            ),
            20 => 
            array (
                'id' => 88,
                'product_id' => 152,
                'position' => 0,
                'category' => '5',
                'subcategory' => '8',
                'position_top' => 0,
                'created' => '2016-12-07 07:55:00',
            ),
        ));
        
        
    }
}