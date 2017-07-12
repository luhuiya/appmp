<?php

use Illuminate\Database\Seeder;

class OauthRefreshTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_refresh_tokens')->delete();
        
        \DB::table('oauth_refresh_tokens')->insert(array (
            0 => 
            array (
                'id' => '62b2fcd84674e30f327f891bbee140deca4a45baacad008aaf256f5a91d113055fc08779e2f5ff14',
                'access_token_id' => 'f74847f8ee87f5ec0beca036d4e5f15e371df72ce63f28a63a59f17c568f482c0c0c237cf41a4790',
                'revoked' => false,
                'expires_at' => '2017-12-22 03:58:19',
            ),
            1 => 
            array (
                'id' => 'e9fb59ed99827eb0d7d420d1516de286e4ea78b1120a04ee3ae4c330ee2e8d24ad262ada0b149a38',
                'access_token_id' => '9e7be266c94b6365538bef7e787a699ad4f07c8d9ca153ff37800a9901cc7aedc7057005aa3a4a20',
                'revoked' => false,
                'expires_at' => '2017-12-22 05:29:24',
            ),
            2 => 
            array (
                'id' => '95dd55b5ef70a7be1e22b54d3ebfb172887f1184072332dddd8e667fe41b2248de1771af42e192e2',
                'access_token_id' => '7c8ec8fa683738f9a78b6a7d36c97c9f68ad7addbc00f8fc7469e6fd5fb80f7ddad3193dba887144',
                'revoked' => false,
                'expires_at' => '2017-12-23 01:42:46',
            ),
            3 => 
            array (
                'id' => 'eb39d396cd2f8779ba3fc59230e7978b215ff3feafc798c82187d8346424b85ac67659473a38dd1c',
                'access_token_id' => '0ff0227cb8c3a7ba033767839bc0b982de387998362bfa2120c4f2efec5b1c16b28844faeb18376f',
                'revoked' => false,
                'expires_at' => '2017-12-23 01:43:44',
            ),
            4 => 
            array (
                'id' => 'd9633ba5e5efb413fba58c22e034670341b19a3a3656558c95bffb6b3286609cd480a8693238907e',
                'access_token_id' => '10135b7b0257ca0aeb15f419ba4a6c5640cdbc9e3cc10eb53a3217b8972e33a72a59fe875ed9db65',
                'revoked' => false,
                'expires_at' => '2017-12-23 01:43:46',
            ),
            5 => 
            array (
                'id' => '177770b9e09e8432d53825122e9c4617c6c141bb17117419cd4eb258e079e0e870f049a7d64e54c1',
                'access_token_id' => '65e8bdcf34ba70174bdf442c4877cd94e7fb4dc6f62ac190acd2ebc607778f6d2534c7fbc67b153e',
                'revoked' => false,
                'expires_at' => '2017-12-23 01:54:24',
            ),
            6 => 
            array (
                'id' => '2f66d05bae538e1ff3acc7b4b1d70c38ba0734c3c31301b6ad655ade97df7d9b3f129cc49ad61c5a',
                'access_token_id' => 'f9214cf83bc847161fecb581c4a93bc3da4e71e598b84fbff3f20b2eade1e367940b9535d352b8d8',
                'revoked' => false,
                'expires_at' => '2017-12-23 01:55:19',
            ),
            7 => 
            array (
                'id' => '7cbc8d9ed295e3ad4245f9db8da2aece72c5902803b445ba467e543674b1ce472849de24568b2ee3',
                'access_token_id' => '05999146a2372220d43dc84bdb3350337388cb04503a00add533c6a07029a09afef30a94558be4da',
                'revoked' => false,
                'expires_at' => '2017-12-23 02:46:40',
            ),
            8 => 
            array (
                'id' => '97bd6afd6d724198d2ee22159ef775bd794b9f36edfce998b04592cedaf0cd152289700057e019e8',
                'access_token_id' => '2646adcc3c5b88269edaa69df901c5cb59bc0166ec23e5df706dc2893d5bcc1dca5ba36b3f497c3c',
                'revoked' => false,
                'expires_at' => '2017-12-23 06:19:48',
            ),
            9 => 
            array (
                'id' => 'ac9f8ba34a8f0fff356eafae1c94a6f3639c0df3e9fe015e40369934c42bcffde31de0e8e9444d1c',
                'access_token_id' => '0d5531fd6ce558692ac9a257fb9111864627009af0ec935bd51a09a3f0a59f4e06bfeb157850f57c',
                'revoked' => false,
                'expires_at' => '2017-12-23 08:11:45',
            ),
            10 => 
            array (
                'id' => '84cdafe0b4a6208397553dbd483da74826c43d4482116e58ac13fbea51f2b46e711530de13c526cb',
                'access_token_id' => 'f9dd0e275559acf0bddf1075059c0d53850b01d8a9012e6d3a288592e46357041d81f285f5cbb161',
                'revoked' => false,
                'expires_at' => '2018-01-03 02:06:56',
            ),
            11 => 
            array (
                'id' => '632b0285899932a77fe8391a3cf39c89429bb5667093dd76e4af1345e89f47abf06c2fb229a10d2c',
                'access_token_id' => 'd7ad39e34424adef860e5a0c95536a79715ce850c099fa7fc7bc4d73d72fa49e4bda5759fb75b2b9',
                'revoked' => false,
                'expires_at' => '2018-01-03 02:06:57',
            ),
            12 => 
            array (
                'id' => 'e07272aa6cd56b3be3353713caa0e603cd093bb7930e5945d45099824adfdefd785f67415a7ab6a7',
                'access_token_id' => 'c2bf53b69042e41c398dd093092eba02c962d91a05ff2cda302bb042f1d3d2eb5b2b6ec87093b003',
                'revoked' => false,
                'expires_at' => '2018-01-03 03:25:08',
            ),
            13 => 
            array (
                'id' => 'f7685b0c815ba1dd0a9b24f6fef63b42c36a50f1f86ad0cea863e5b15c19da4204b62909ba4c1dd9',
                'access_token_id' => '7bfed58888330b1925c59db8369e6d8aaa41713bdcff9fbaeb9b1412196dc4d608f7b2bee67a3dda',
                'revoked' => false,
                'expires_at' => '2018-01-05 02:18:50',
            ),
            14 => 
            array (
                'id' => '194b13af88f9db60b23a8aeae14019ecd7fe5e3b6b576abbbc02d2591323302a5c3887d0f7f8b342',
                'access_token_id' => 'c7c80314a10f822e1ba166fb555da0ef60f4716ef4e838cc2cf0bd86b9cee3f5fc852b4afab8d1fb',
                'revoked' => false,
                'expires_at' => '2018-01-05 02:23:09',
            ),
            15 => 
            array (
                'id' => '781eefa3bfc15ba7600f17dacdec7528ade941ea9b8c593cca146af1dc55397b216fea316dd95783',
                'access_token_id' => 'e9deed25ffe5989db5a6206692235f5004dff362d1a2e24207d12f6bd2c8a3aa9094790648d0c818',
                'revoked' => false,
                'expires_at' => '2018-01-06 01:26:58',
            ),
            16 => 
            array (
                'id' => '5c8f99ead57df685120f78c9a9959eb09dcb590245e0856a44bddbc4b63234150cc2812d0714bfb1',
                'access_token_id' => 'a49c822bbc07622cbdbdcd817f331291e3fc65b5ae6250746f6d0a6dc55365b9f4d6e98efdc91d5f',
                'revoked' => false,
                'expires_at' => '2018-01-09 01:22:44',
            ),
            17 => 
            array (
                'id' => 'c97860deec08ca3ff209965ddb949b378abe44866258c2a2b37aac35c6798e77c55215542ba4bf30',
                'access_token_id' => '7ec212f0b6a41497c2ca71c37cda457c63e96b3d5555161ebac223150c42a3899296f6a273e6f165',
                'revoked' => false,
                'expires_at' => '2018-01-09 01:22:46',
            ),
            18 => 
            array (
                'id' => 'a1a8306f5cb2e41d4b6b338ae28ae7298ba27caa9ec529ebbf7338f95e1b84ba76a177e19a09b32e',
                'access_token_id' => '767426ede19cb0c044ace68db35f7473d5c328dfa6a7cb5fd576a6cd0b0cccc3454725cb4656c703',
                'revoked' => false,
                'expires_at' => '2018-01-10 01:43:28',
            ),
            19 => 
            array (
                'id' => '3c354c103070976c3bf7330053f00a686dedcf0cab3e76b8e735b5b656c92d34f5da10fe824e9ad1',
                'access_token_id' => '3fb9744baf615e389150f35132f39904765771d03d9d6d244277b9efe89f9ff09a9a854e08585e95',
                'revoked' => false,
                'expires_at' => '2018-01-10 06:30:10',
            ),
            20 => 
            array (
                'id' => 'd1b5df83846a7709c7301ff444c9079488650caf7f55362336ac649fc85bb350e7a670a7e84a9a34',
                'access_token_id' => '277f9aba59fe8a31221401cc7b884c735fbde34830cb097e866e8802088472a01f06f76f2b8ef9f8',
                'revoked' => false,
                'expires_at' => '2018-01-10 06:30:11',
            ),
            21 => 
            array (
                'id' => '4edf965e27eed19cef9310b68b54d05bf3eabfa51dd24c5fb2e83a20fab77e78ce484071044538bc',
                'access_token_id' => 'caa5f1edfb1d90d0ba8d825a202c7ed454f7fc86cd0ffb3ae9d2423975cbb52204d9509a8df2996b',
                'revoked' => false,
                'expires_at' => '2018-01-10 09:43:49',
            ),
            22 => 
            array (
                'id' => 'd8a443b2df66ee61a7c42488153113babd51f3e3b9ee59150eb614fdfb66fa25e7d8b6d9aae718b5',
                'access_token_id' => '4df0065dad6cc38d062edf268f6ee3bd1c3981823b226e431a14c1f1d3062f4621c159c4f25086c8',
                'revoked' => false,
                'expires_at' => '2018-01-10 09:44:06',
            ),
            23 => 
            array (
                'id' => '14b019455fe8ce40763e337f3affda8a92f300b63ef27748275e0f1270e5c54efba1902cf434b925',
                'access_token_id' => '26a227839f1c87e753534fa23c8a375eb64c906e114724a9c02a39fb125a6f7fb8a213539d9c7796',
                'revoked' => false,
                'expires_at' => '2018-01-11 06:15:49',
            ),
            24 => 
            array (
                'id' => '0f2b03660517c7724bc6de932f9a3ca3c9a0bfa75084ad4b5be3053930bf26288141a3fbd04a0788',
                'access_token_id' => 'e7f56a681d440e63a4acce8390e17cef086bd24bf360145355de6a03d73dc6c61f44d9032487b60e',
                'revoked' => false,
                'expires_at' => '2018-01-11 06:44:18',
            ),
            25 => 
            array (
                'id' => '7781b4558907f34efefde52807f70d70a20a13f4703e2eb653570ed0706cefee80c5e5ba14998192',
                'access_token_id' => '1bee0f9fefede01db9edada745bd98360a6c6585bddeafcb94c0a8b260d78b76b7e7e0d5d9f42102',
                'revoked' => false,
                'expires_at' => '2018-01-12 01:54:07',
            ),
            26 => 
            array (
                'id' => 'fc950cbb633d3be37539d240b7c20c3e5c55aaac27a42b101573b452f6e3913ddcf8110ae24e1685',
                'access_token_id' => '6eb79e3b6c0f546c84b7a0a90fa9351f8f59c4b610b6eb5c823dec3285af28c282007b6024995988',
                'revoked' => false,
                'expires_at' => '2018-01-12 01:54:49',
            ),
            27 => 
            array (
                'id' => 'de8ebb7ba68606cef8c8edd20f2937f0d02af0a9c4db2eace1a0929df01d382f8b8c5c1135fa78c2',
                'access_token_id' => '545c31049dea1cfb80fc86cd2142de6326e0222b2118370c170abdb20b9278ab07bb454345dffc79',
                'revoked' => false,
                'expires_at' => '2018-01-12 01:57:59',
            ),
            28 => 
            array (
                'id' => '01ca53d1730fcfc491b95f41759a7a6cfb30d9c97335b20b08e8d803c98ac9663082f96ebaa1e599',
                'access_token_id' => '7813eaf2c6121784e30b6ef933c2978dc53b20ba3fe8b5469bcca931bcc4cefc2890f5b60df37da4',
                'revoked' => false,
                'expires_at' => '2018-01-12 08:07:33',
            ),
            29 => 
            array (
                'id' => 'd22ea0bb442cb474853b47483a492b607cea0ccfb47d860bcaae1ed525837ab6cad2f19c7217d2a3',
                'access_token_id' => '65751a332ff207c7ff70e27ed7b47d1af19d8079961cac7e3d48428ee315620b1214c219566c1b69',
                'revoked' => false,
                'expires_at' => '2018-01-12 08:13:48',
            ),
            30 => 
            array (
                'id' => 'ebab50bd1e792e3a7c1b8c719ab679dffb9c5345b055682d7479dbabd17eca2d1d0252b77c8c451a',
                'access_token_id' => 'bdf9621c816703d3c635d61e60b123e0f5543545d47368c1baeb650a0982e95c149b246ee1c8f447',
                'revoked' => false,
                'expires_at' => '2018-01-12 09:36:15',
            ),
            31 => 
            array (
                'id' => 'd1f90690c2708452ee3482f80f78489b73dbe1dbd29890177fea4ca2e77e9560ec7fa41135cf016e',
                'access_token_id' => 'a36be68a7259e287900c33b430a5566862cf081f74b615f278aca30af7841892265d53cae7ed129f',
                'revoked' => false,
                'expires_at' => '2018-01-13 06:10:24',
            ),
            32 => 
            array (
                'id' => '26c357b20242b8b64046dbf85765e5d08c99b594b7017082c5047c7eaa84d6b790fe10e9e1995390',
                'access_token_id' => '73b5316cdfed20adb916615737799ebb786ac344cfafdefbdfbd942178f3f3415709b510f94ffa1e',
                'revoked' => false,
                'expires_at' => '2018-01-13 06:10:53',
            ),
            33 => 
            array (
                'id' => '125d2a78d9e4ef6055e5abf1033eb7afe9b53fcebc6d1a16e5bb6e747393a983b5e5842f3d01ccf8',
                'access_token_id' => 'c05d71e56ab4597f5eaf7dd3c5c0ebbdbe0abd3e0026f792a495056dc08c07192dc71023e53b9285',
                'revoked' => false,
                'expires_at' => '2018-01-13 06:46:02',
            ),
            34 => 
            array (
                'id' => '4c7d966f1b98e0c043c09e6ced2d2351ab23ecfc64ea3f7304bcec2ba66757d1e98722ff02e1e594',
                'access_token_id' => '3d57edffc3372d91b4eb9e9f946506e39bef0f46c1584aae62cb6a4f5815b3810cfe17fa3a3c27f4',
                'revoked' => false,
                'expires_at' => '2018-01-13 06:46:21',
            ),
            35 => 
            array (
                'id' => 'ccf7c01598ae20800f5d2d53fd4831440de7f590ea58ed3928b98dcd29fcda0b6fe18890b69d6241',
                'access_token_id' => 'dbfe20d3b2f08862786525d0718adecc21275e22067698ca34f8f4deaccb0cc3c3012d7a58b579fe',
                'revoked' => false,
                'expires_at' => '2018-01-13 09:46:37',
            ),
            36 => 
            array (
                'id' => '8813eecfa6bf0f75f0a5f36aa91d44da1cc6cf6ab1e7e1fa6d91d34f045bff3e1716cbb170f9e532',
                'access_token_id' => '2f5cd20a076b340d32aac8d32da87e7a647c09c51b103ade3236c33f491126819365316884622c3c',
                'revoked' => false,
                'expires_at' => '2018-01-13 10:13:14',
            ),
            37 => 
            array (
                'id' => '12d1cd536e9e9ed4862f85fd1d2f8a4a2358bd2dcb9a9cdb4a030b7d7484d0f9dda295649e380ae4',
                'access_token_id' => '376043483f9138191bf4acac2af3341497a11e0106b552b4ab68e8d63a9c0da23cd288987bdb693a',
                'revoked' => false,
                'expires_at' => '2018-01-16 06:23:02',
            ),
            38 => 
            array (
                'id' => '708fc8d0744e3f9a674a68ff18aca691ebb23c4ed089b22eef884770543639add20e22c437c7e4a1',
                'access_token_id' => '74bdd2b3c67ffc80db786274a5ad106a648f90a12aa2210332f14cfe2bfe923a6c04862b831919a9',
                'revoked' => false,
                'expires_at' => '2018-01-16 07:47:06',
            ),
            39 => 
            array (
                'id' => '12146ff6dadf410e7a95bb0dbeec3e5dedf4a426bc08ae14997e4d434242735c661d0c5e9ff777cb',
                'access_token_id' => '4669295d473975f7bed53b348300500700427969b915464541b8ab3f5c192861f39bcf6814664f44',
                'revoked' => false,
                'expires_at' => '2018-07-11 06:52:42',
            ),
        ));
        
        
    }
}