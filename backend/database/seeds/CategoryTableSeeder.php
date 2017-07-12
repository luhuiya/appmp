<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Movies',
                'target' => '#movies',
                'priority' => 1,
                'is_active' => true,
                'created' => '2016-10-25 08:12:06',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Books',
                'target' => '#books',
                'priority' => 3,
                'is_active' => true,
                'created' => '2016-11-02 08:37:45',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Aplications',
                'target' => '#aplications',
                'priority' => 2,
                'is_active' => true,
                'created' => '2016-10-25 08:14:17',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Musics',
                'target' => '#musics',
                'priority' => 4,
                'is_active' => true,
                'created' => '2016-11-02 09:37:23',
            ),
        ));
        
        
    }
}