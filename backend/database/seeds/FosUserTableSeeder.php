<?php

use Illuminate\Database\Seeder;

class FosUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fos_user')->delete();
        
        \DB::table('fos_user')->insert(array (
            0 => 
            array (
                'id' => 28,
                'username' => 'andang',
                'username_canonical' => 'andang',
                'email' => 'andang@gmail.com',
                'email_canonical' => 'andang@gmail.com',
                'enabled' => true,
                'salt' => 'rwea5az8xzk8cooo0wc0oowkwosk4cg',
                'password' => '$2y$13$HrSBJzQNAqyEWErcpYD9Q.H3E4y9/Ri/zORrqwe4CM2RV3CUhh2Ua',
                'last_login' => NULL,
                'locked' => false,
                'expired' => false,
                'expires_at' => NULL,
                'confirmation_token' => NULL,
                'password_requested_at' => NULL,
                'roles' => 'a:0:{}',
                'credentials_expired' => false,
                'credentials_expire_at' => NULL,
            ),
            1 => 
            array (
                'id' => 26,
                'username' => 'reactuser',
                'username_canonical' => 'reactuser',
                'email' => 'react@test.com',
                'email_canonical' => 'react@test.com',
                'enabled' => true,
                'salt' => 'gkb73c7dqjso0kww8g40k400scw4cws',
                'password' => '$2y$13$y22Vd.hef1uw.kQVBv340.rbDs9IEj8zSV7x7sV0Ot2.BPLmcM/cq',
                'last_login' => '2016-12-01 04:19:54',
                'locked' => false,
                'expired' => false,
                'expires_at' => NULL,
                'confirmation_token' => NULL,
                'password_requested_at' => NULL,
                'roles' => 'a:0:{}',
                'credentials_expired' => false,
                'credentials_expire_at' => NULL,
            ),
            2 => 
            array (
                'id' => 27,
                'username' => 'reacttest',
                'username_canonical' => 'reacttest',
                'email' => 'test@test.com',
                'email_canonical' => 'test@test.com',
                'enabled' => true,
                'salt' => 'im02pjj7pvs40g8www0swwg0g0w0ckc',
                'password' => '$2y$13$kKuUv.3sb16gbaWYTSAptuvWlqN2Xb8xAD6FeyY4qhZA13CVwLDI6',
                'last_login' => '2016-12-01 06:08:49',
                'locked' => false,
                'expired' => false,
                'expires_at' => NULL,
                'confirmation_token' => NULL,
                'password_requested_at' => NULL,
                'roles' => 'a:0:{}',
                'credentials_expired' => false,
                'credentials_expire_at' => NULL,
            ),
            3 => 
            array (
                'id' => 23,
                'username' => 'rian',
                'username_canonical' => 'rian',
                'email' => 'rian@gmail.com',
                'email_canonical' => 'rian@gmail.com',
                'enabled' => true,
                'salt' => 'llzrbmnrhxc0ogkok484oc844ckgscw',
                'password' => '$2y$13$u1IEx2HB6OQ9p4/itp7suOAup3kGWEVJZvGDq47jxpeoqR1ypKJJ.',
                'last_login' => NULL,
                'locked' => false,
                'expired' => false,
                'expires_at' => NULL,
                'confirmation_token' => NULL,
                'password_requested_at' => NULL,
                'roles' => 'a:0:{}',
                'credentials_expired' => false,
                'credentials_expire_at' => NULL,
            ),
            4 => 
            array (
                'id' => 24,
                'username' => 'riand',
                'username_canonical' => 'riand',
                'email' => 'riand@gmail.com',
                'email_canonical' => 'riand@gmail.com',
                'enabled' => true,
                'salt' => '7bs5l354lcow88k44gs4s44g4888c8w',
                'password' => '$2y$13$F7oHcBs4OfNT8ZpdiMIb2eD866iMZE8a7NeRkn6SyBgGkv4KeiGcC',
                'last_login' => NULL,
                'locked' => false,
                'expired' => false,
                'expires_at' => NULL,
                'confirmation_token' => NULL,
                'password_requested_at' => NULL,
                'roles' => 'a:0:{}',
                'credentials_expired' => false,
                'credentials_expire_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'username_canonical' => 'admin',
                'email' => 'dms2707@gmail.com',
                'email_canonical' => 'dms2707@gmail.com',
                'enabled' => true,
                'salt' => 't4wv3ry4rbkc0oosoo4ww4w8gg4o0ss',
                'password' => '$2y$13$/c4DY4uHVtSjuuyHFE8wPe5Rwf5j9bA4SjwOyeavfAn5Jkjpyo6E6',
                'last_login' => '2017-01-03 06:27:18',
                'locked' => false,
                'expired' => false,
                'expires_at' => NULL,
                'confirmation_token' => NULL,
                'password_requested_at' => NULL,
                'roles' => 'a:1:{i:0;s:10:"ROLE_ADMIN";}',
                'credentials_expired' => false,
                'credentials_expire_at' => NULL,
            ),
            6 => 
            array (
                'id' => 19,
                'username' => 'andang',
                'username_canonical' => 'andang',
                'email' => 'andang@gmail.com',
                'email_canonical' => 'andang@gmail.com',
                'enabled' => true,
                'salt' => 'rx3xlccz7msws0sgs4gcwkggog08ogs',
                'password' => '$2y$13$wEogjT5RxIny5zI0G88dleR7nYpXZxCgVeExXTr1YweifF1VL/oge',
                'last_login' => '2016-12-21 08:27:13',
                'locked' => false,
                'expired' => false,
                'expires_at' => NULL,
                'confirmation_token' => NULL,
                'password_requested_at' => NULL,
                'roles' => 'a:0:{}',
                'credentials_expired' => false,
                'credentials_expire_at' => NULL,
            ),
        ));
        
        
    }
}