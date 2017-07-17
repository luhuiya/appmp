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
        
        \DB::table('subcategory')->delete();
        
        \DB::table('subcategory')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Tools',
                'target' => '#aptools',
                'priority' => 2,
                'is_active' => true,
                'created' => '2016-10-31 10:02:12',
                'category_id' => 4,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Socials',
                'target' => '#apsocial',
                'priority' => 2,
                'is_active' => true,
                'created' => '2016-10-25 08:41:21',
                'category_id' => 4,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Pop',
                'target' => '#mscpop',
                'priority' => 1,
                'is_active' => true,
                'created' => '2016-11-02 09:38:45',
                'category_id' => 6,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Rock',
                'target' => '#mscrock',
                'priority' => 2,
                'is_active' => true,
                'created' => '2016-11-02 09:49:47',
                'category_id' => 6,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Comedy',
                'target' => '#mvcomedy',
                'priority' => 1,
                'is_active' => true,
                'created' => '2016-11-02 11:22:54',
                'category_id' => 3,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Fiksi',
                'target' => '#mvfiksi',
                'priority' => 2,
                'is_active' => true,
                'created' => '2016-11-02 11:29:42',
                'category_id' => 3,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Novel',
                'target' => '#bknovel',
                'priority' => 1,
                'is_active' => true,
                'created' => '2016-11-02 12:54:37',
                'category_id' => 5,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Psycology',
                'target' => '#bkpsycology',
                'priority' => 2,
                'is_active' => true,
                'created' => '2016-11-02 12:56:47',
                'category_id' => 5,
            ),
        ));
        
    }
}