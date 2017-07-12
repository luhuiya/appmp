<?php

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 'f74847f8ee87f5ec0beca036d4e5f15e371df72ce63f28a63a59f17c568f482c0c0c237cf41a4790',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-22 03:58:19',
                'updated_at' => '2016-12-22 03:58:19',
                'expires_at' => '2017-12-22 03:58:19',
            ),
            1 => 
            array (
                'id' => '9e7be266c94b6365538bef7e787a699ad4f07c8d9ca153ff37800a9901cc7aedc7057005aa3a4a20',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-22 05:29:23',
                'updated_at' => '2016-12-22 05:29:23',
                'expires_at' => '2017-12-22 05:29:23',
            ),
            2 => 
            array (
                'id' => '7c8ec8fa683738f9a78b6a7d36c97c9f68ad7addbc00f8fc7469e6fd5fb80f7ddad3193dba887144',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-23 01:42:46',
                'updated_at' => '2016-12-23 01:42:46',
                'expires_at' => '2017-12-23 01:42:46',
            ),
            3 => 
            array (
                'id' => '0ff0227cb8c3a7ba033767839bc0b982de387998362bfa2120c4f2efec5b1c16b28844faeb18376f',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-23 01:43:44',
                'updated_at' => '2016-12-23 01:43:44',
                'expires_at' => '2017-12-23 01:43:44',
            ),
            4 => 
            array (
                'id' => '10135b7b0257ca0aeb15f419ba4a6c5640cdbc9e3cc10eb53a3217b8972e33a72a59fe875ed9db65',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-23 01:43:46',
                'updated_at' => '2016-12-23 01:43:46',
                'expires_at' => '2017-12-23 01:43:46',
            ),
            5 => 
            array (
                'id' => '65e8bdcf34ba70174bdf442c4877cd94e7fb4dc6f62ac190acd2ebc607778f6d2534c7fbc67b153e',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-23 01:54:24',
                'updated_at' => '2016-12-23 01:54:24',
                'expires_at' => '2017-12-23 01:54:24',
            ),
            6 => 
            array (
                'id' => 'f9214cf83bc847161fecb581c4a93bc3da4e71e598b84fbff3f20b2eade1e367940b9535d352b8d8',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-23 01:55:19',
                'updated_at' => '2016-12-23 01:55:19',
                'expires_at' => '2017-12-23 01:55:19',
            ),
            7 => 
            array (
                'id' => '05999146a2372220d43dc84bdb3350337388cb04503a00add533c6a07029a09afef30a94558be4da',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-23 02:46:40',
                'updated_at' => '2016-12-23 02:46:40',
                'expires_at' => '2017-12-23 02:46:40',
            ),
            8 => 
            array (
                'id' => '2646adcc3c5b88269edaa69df901c5cb59bc0166ec23e5df706dc2893d5bcc1dca5ba36b3f497c3c',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-23 06:19:48',
                'updated_at' => '2016-12-23 06:19:48',
                'expires_at' => '2017-12-23 06:19:48',
            ),
            9 => 
            array (
                'id' => '0d5531fd6ce558692ac9a257fb9111864627009af0ec935bd51a09a3f0a59f4e06bfeb157850f57c',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2016-12-23 08:11:45',
                'updated_at' => '2016-12-23 08:11:45',
                'expires_at' => '2017-12-23 08:11:45',
            ),
            10 => 
            array (
                'id' => 'f9dd0e275559acf0bddf1075059c0d53850b01d8a9012e6d3a288592e46357041d81f285f5cbb161',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-03 02:06:56',
                'updated_at' => '2017-01-03 02:06:56',
                'expires_at' => '2018-01-03 02:06:56',
            ),
            11 => 
            array (
                'id' => 'd7ad39e34424adef860e5a0c95536a79715ce850c099fa7fc7bc4d73d72fa49e4bda5759fb75b2b9',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-03 02:06:57',
                'updated_at' => '2017-01-03 02:06:57',
                'expires_at' => '2018-01-03 02:06:57',
            ),
            12 => 
            array (
                'id' => 'c2bf53b69042e41c398dd093092eba02c962d91a05ff2cda302bb042f1d3d2eb5b2b6ec87093b003',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-03 03:25:08',
                'updated_at' => '2017-01-03 03:25:08',
                'expires_at' => '2018-01-03 03:25:08',
            ),
            13 => 
            array (
                'id' => '7bfed58888330b1925c59db8369e6d8aaa41713bdcff9fbaeb9b1412196dc4d608f7b2bee67a3dda',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-05 02:18:50',
                'updated_at' => '2017-01-05 02:18:50',
                'expires_at' => '2018-01-05 02:18:50',
            ),
            14 => 
            array (
                'id' => 'c7c80314a10f822e1ba166fb555da0ef60f4716ef4e838cc2cf0bd86b9cee3f5fc852b4afab8d1fb',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-05 02:23:08',
                'updated_at' => '2017-01-05 02:23:08',
                'expires_at' => '2018-01-05 02:23:08',
            ),
            15 => 
            array (
                'id' => 'e9deed25ffe5989db5a6206692235f5004dff362d1a2e24207d12f6bd2c8a3aa9094790648d0c818',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-06 01:26:58',
                'updated_at' => '2017-01-06 01:26:58',
                'expires_at' => '2018-01-06 01:26:58',
            ),
            16 => 
            array (
                'id' => 'a49c822bbc07622cbdbdcd817f331291e3fc65b5ae6250746f6d0a6dc55365b9f4d6e98efdc91d5f',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-09 01:22:44',
                'updated_at' => '2017-01-09 01:22:44',
                'expires_at' => '2018-01-09 01:22:44',
            ),
            17 => 
            array (
                'id' => '7ec212f0b6a41497c2ca71c37cda457c63e96b3d5555161ebac223150c42a3899296f6a273e6f165',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-09 01:22:46',
                'updated_at' => '2017-01-09 01:22:46',
                'expires_at' => '2018-01-09 01:22:46',
            ),
            18 => 
            array (
                'id' => '767426ede19cb0c044ace68db35f7473d5c328dfa6a7cb5fd576a6cd0b0cccc3454725cb4656c703',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-10 01:43:28',
                'updated_at' => '2017-01-10 01:43:28',
                'expires_at' => '2018-01-10 01:43:28',
            ),
            19 => 
            array (
                'id' => '3fb9744baf615e389150f35132f39904765771d03d9d6d244277b9efe89f9ff09a9a854e08585e95',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-10 06:30:10',
                'updated_at' => '2017-01-10 06:30:10',
                'expires_at' => '2018-01-10 06:30:10',
            ),
            20 => 
            array (
                'id' => '277f9aba59fe8a31221401cc7b884c735fbde34830cb097e866e8802088472a01f06f76f2b8ef9f8',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-10 06:30:10',
                'updated_at' => '2017-01-10 06:30:10',
                'expires_at' => '2018-01-10 06:30:10',
            ),
            21 => 
            array (
                'id' => 'caa5f1edfb1d90d0ba8d825a202c7ed454f7fc86cd0ffb3ae9d2423975cbb52204d9509a8df2996b',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-10 09:43:49',
                'updated_at' => '2017-01-10 09:43:49',
                'expires_at' => '2018-01-10 09:43:49',
            ),
            22 => 
            array (
                'id' => '4df0065dad6cc38d062edf268f6ee3bd1c3981823b226e431a14c1f1d3062f4621c159c4f25086c8',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-10 09:44:06',
                'updated_at' => '2017-01-10 09:44:06',
                'expires_at' => '2018-01-10 09:44:06',
            ),
            23 => 
            array (
                'id' => '26a227839f1c87e753534fa23c8a375eb64c906e114724a9c02a39fb125a6f7fb8a213539d9c7796',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-11 06:15:49',
                'updated_at' => '2017-01-11 06:15:49',
                'expires_at' => '2018-01-11 06:15:49',
            ),
            24 => 
            array (
                'id' => 'e7f56a681d440e63a4acce8390e17cef086bd24bf360145355de6a03d73dc6c61f44d9032487b60e',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-11 06:44:18',
                'updated_at' => '2017-01-11 06:44:18',
                'expires_at' => '2018-01-11 06:44:18',
            ),
            25 => 
            array (
                'id' => '1bee0f9fefede01db9edada745bd98360a6c6585bddeafcb94c0a8b260d78b76b7e7e0d5d9f42102',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-12 01:54:07',
                'updated_at' => '2017-01-12 01:54:07',
                'expires_at' => '2018-01-12 01:54:07',
            ),
            26 => 
            array (
                'id' => '6eb79e3b6c0f546c84b7a0a90fa9351f8f59c4b610b6eb5c823dec3285af28c282007b6024995988',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-12 01:54:49',
                'updated_at' => '2017-01-12 01:54:49',
                'expires_at' => '2018-01-12 01:54:49',
            ),
            27 => 
            array (
                'id' => '545c31049dea1cfb80fc86cd2142de6326e0222b2118370c170abdb20b9278ab07bb454345dffc79',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-12 01:57:59',
                'updated_at' => '2017-01-12 01:57:59',
                'expires_at' => '2018-01-12 01:57:59',
            ),
            28 => 
            array (
                'id' => '7813eaf2c6121784e30b6ef933c2978dc53b20ba3fe8b5469bcca931bcc4cefc2890f5b60df37da4',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-12 08:07:33',
                'updated_at' => '2017-01-12 08:07:33',
                'expires_at' => '2018-01-12 08:07:33',
            ),
            29 => 
            array (
                'id' => '65751a332ff207c7ff70e27ed7b47d1af19d8079961cac7e3d48428ee315620b1214c219566c1b69',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-12 08:13:48',
                'updated_at' => '2017-01-12 08:13:48',
                'expires_at' => '2018-01-12 08:13:48',
            ),
            30 => 
            array (
                'id' => 'bdf9621c816703d3c635d61e60b123e0f5543545d47368c1baeb650a0982e95c149b246ee1c8f447',
                'user_id' => 14,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-12 09:36:15',
                'updated_at' => '2017-01-12 09:36:15',
                'expires_at' => '2018-01-12 09:36:15',
            ),
            31 => 
            array (
                'id' => 'a36be68a7259e287900c33b430a5566862cf081f74b615f278aca30af7841892265d53cae7ed129f',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-13 06:10:24',
                'updated_at' => '2017-01-13 06:10:24',
                'expires_at' => '2018-01-13 06:10:24',
            ),
            32 => 
            array (
                'id' => '73b5316cdfed20adb916615737799ebb786ac344cfafdefbdfbd942178f3f3415709b510f94ffa1e',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-13 06:10:53',
                'updated_at' => '2017-01-13 06:10:53',
                'expires_at' => '2018-01-13 06:10:53',
            ),
            33 => 
            array (
                'id' => 'c05d71e56ab4597f5eaf7dd3c5c0ebbdbe0abd3e0026f792a495056dc08c07192dc71023e53b9285',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-13 06:46:02',
                'updated_at' => '2017-01-13 06:46:02',
                'expires_at' => '2018-01-13 06:46:02',
            ),
            34 => 
            array (
                'id' => '3d57edffc3372d91b4eb9e9f946506e39bef0f46c1584aae62cb6a4f5815b3810cfe17fa3a3c27f4',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-13 06:46:21',
                'updated_at' => '2017-01-13 06:46:21',
                'expires_at' => '2018-01-13 06:46:21',
            ),
            35 => 
            array (
                'id' => 'dbfe20d3b2f08862786525d0718adecc21275e22067698ca34f8f4deaccb0cc3c3012d7a58b579fe',
                'user_id' => 15,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-13 09:46:37',
                'updated_at' => '2017-01-13 09:46:37',
                'expires_at' => '2018-01-13 09:46:37',
            ),
            36 => 
            array (
                'id' => '2f5cd20a076b340d32aac8d32da87e7a647c09c51b103ade3236c33f491126819365316884622c3c',
                'user_id' => 15,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-13 10:13:14',
                'updated_at' => '2017-01-13 10:13:14',
                'expires_at' => '2018-01-13 10:13:14',
            ),
            37 => 
            array (
                'id' => '376043483f9138191bf4acac2af3341497a11e0106b552b4ab68e8d63a9c0da23cd288987bdb693a',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-16 06:23:02',
                'updated_at' => '2017-01-16 06:23:02',
                'expires_at' => '2018-01-16 06:23:02',
            ),
            38 => 
            array (
                'id' => '74bdd2b3c67ffc80db786274a5ad106a648f90a12aa2210332f14cfe2bfe923a6c04862b831919a9',
                'user_id' => 2,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-01-16 07:47:06',
                'updated_at' => '2017-01-16 07:47:06',
                'expires_at' => '2018-01-16 07:47:06',
            ),
            39 => 
            array (
                'id' => '4669295d473975f7bed53b348300500700427969b915464541b8ab3f5c192861f39bcf6814664f44',
                'user_id' => 16,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '["*"]',
                'revoked' => false,
                'created_at' => '2017-07-11 06:52:42',
                'updated_at' => '2017-07-11 06:52:42',
                'expires_at' => '2018-07-11 06:52:42',
            ),
        ));
        
        
    }
}