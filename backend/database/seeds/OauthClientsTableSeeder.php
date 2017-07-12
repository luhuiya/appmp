<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'yreOUKpud6rxfQ4VKb2B92nfW08NPMo6XdYUEQMH',
                'redirect' => 'http://localhost',
                'personal_access_client' => true,
                'password_client' => false,
                'revoked' => false,
                'created_at' => '2016-12-22 03:14:47',
                'updated_at' => '2016-12-22 03:14:47',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Laravel Password Grant Client',
                'secret' => 'VciAKaQztipCdfNBNsd3e3fNiSuQYy4wZn4vXtyp',
                'redirect' => 'http://localhost',
                'personal_access_client' => false,
                'password_client' => true,
                'revoked' => false,
                'created_at' => '2016-12-22 03:14:47',
                'updated_at' => '2016-12-22 03:14:47',
            ),
        ));
        
        
    }
}