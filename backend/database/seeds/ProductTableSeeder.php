<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product')->delete();
        
        \DB::table('product')->insert(array (
            0 => 
            array (
                'id' => 78,
                'product_name' => 'Doctor Strange',
                'package_code' => '342414',
                'price' => '50000.00',
                'description' => 'This is new movie release in the end of 2016',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 14:18:27',
                'category_id' => 3,
                'sub_category_id' => 7,
            ),
            1 => 
            array (
                'id' => 62,
                'product_name' => 'CC Cleaner',
                'package_code' => '6285',
                'price' => '10000.00',
                'description' => 'This product can help you to mantain your PC',
                'compatibility' => 'Windows',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 09:01:18',
                'category_id' => 4,
                'sub_category_id' => 3,
            ),
            2 => 
            array (
                'id' => 63,
                'product_name' => 'Clean Master',
                'package_code' => '34243',
                'price' => '0.00',
                'description' => 'This product can help you to maintain your mobile android',
                'compatibility' => 'Android',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 09:03:35',
                'category_id' => 4,
                'sub_category_id' => 3,
            ),
            3 => 
            array (
                'id' => 66,
                'product_name' => 'Twitter',
                'package_code' => '34783',
                'price' => '0.00',
                'description' => 'One of the popular social medias in the wolrd',
                'compatibility' => 'Android',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 09:16:27',
                'category_id' => 4,
                'sub_category_id' => 2,
            ),
            4 => 
            array (
                'id' => 67,
                'product_name' => 'Path',
                'package_code' => '48421',
                'price' => '0.00',
                'description' => 'This Social Media is now on trending topics',
                'compatibility' => 'Android',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 09:19:13',
                'category_id' => 4,
                'sub_category_id' => 2,
            ),
            5 => 
            array (
                'id' => 68,
                'product_name' => 'TestDisk',
                'package_code' => '56235',
                'price' => '12500.00',
                'description' => 'This App is for checking your disk and recover some missing data',
                'compatibility' => 'Windows',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 09:24:32',
                'category_id' => 4,
                'sub_category_id' => 3,
            ),
            6 => 
            array (
                'id' => 70,
                'product_name' => 'Maroon 5 - Animals',
                'package_code' => '43245',
                'price' => '5000.00',
                'description' => 'This is single hit from maroon 5.',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 10:06:25',
                'category_id' => 6,
                'sub_category_id' => 4,
            ),
            7 => 
            array (
                'id' => 71,
                'product_name' => 'Maroon 5 - Don\'t Wanna Know',
                'package_code' => '52523',
                'price' => '5000.00',
                'description' => 'This is single hit from Maroon 5.',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 10:12:55',
                'category_id' => 6,
                'sub_category_id' => 4,
            ),
            8 => 
            array (
                'id' => 123,
                'product_name' => 'Oracle VM Virtual Box',
                'package_code' => '31442',
                'price' => '1000000.00',
                'description' => 'Virtual machine issued by Oracle',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-03 15:17:52',
                'category_id' => NULL,
                'sub_category_id' => NULL,
            ),
            9 => 
            array (
                'id' => 72,
                'product_name' => 'Ariana Grande - Focus',
                'package_code' => '52355',
                'price' => '5000.00',
                'description' => 'This is single hit from Ariana Grande',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 10:14:45',
                'category_id' => 6,
                'sub_category_id' => 4,
            ),
            10 => 
            array (
                'id' => 73,
                'product_name' => 'Ariana Grande - Side to Side',
                'package_code' => '23424',
                'price' => '5000.00',
                'description' => 'This is single hit from Ariana Grande',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 10:15:38',
                'category_id' => 6,
                'sub_category_id' => 4,
            ),
            11 => 
            array (
                'id' => 74,
                'product_name' => 'Coldplay - Up and Up',
                'package_code' => '3252',
                'price' => '5000.00',
                'description' => 'This is single hit from Coldplay',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 10:19:21',
                'category_id' => 6,
                'sub_category_id' => 4,
            ),
            12 => 
            array (
                'id' => 122,
                'product_name' => 'Whatsapp',
                'package_code' => '425432',
                'price' => '12500.00',
                'description' => 'Whatsapp',
                'compatibility' => 'Android',
                'urldownload' => 'https://www.cdn.whatsapp.net/android/2.16.339/WhatsApp.apk',
                'status' => 'ACTIVE',
                'created' => '2016-11-03 14:53:14',
                'category_id' => 4,
                'sub_category_id' => 2,
            ),
            13 => 
            array (
                'id' => 64,
                'product_name' => 'Facebook',
                'package_code' => '783235',
                'price' => '5000.00',
                'description' => 'Share your daily activity on Facebook. You can get many frends',
                'compatibility' => 'Android',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 09:11:02',
                'category_id' => 4,
                'sub_category_id' => 2,
            ),
            14 => 
            array (
                'id' => 61,
                'product_name' => 'Chrome',
                'package_code' => '9274',
                'price' => '5000.00',
                'description' => 'This product is free, you can download it without any payment',
                'compatibility' => 'Windows',
                'urldownload' => 'https://dl.google.com/tag/s/appguid%3D%7B8A69D345-D564-463C-AFF1-A69D9E530F96%7D%26iid%3D%7BE6A7065D-2617-BF67-B07A-FF5EFD57339C%7D%26lang%3Den%26browser%3D4%26usagestats%3D1%26appname%3DGoogle%2520Chrome%26needsadmin%3Dprefers%26ap%3Dx64-stable-statsdef_1%26installdataindex%3Ddefaultbrowser/update2/installers/ChromeSetup.exe',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 08:51:45',
                'category_id' => 4,
                'sub_category_id' => 3,
            ),
            15 => 
            array (
                'id' => 69,
                'product_name' => 'Vine',
                'package_code' => '89325',
                'price' => '0.00',
                'description' => 'This is new comer in social media. You can share special moments here.',
                'compatibility' => 'Android',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 09:30:14',
                'category_id' => 4,
                'sub_category_id' => 2,
            ),
            16 => 
            array (
                'id' => 77,
                'product_name' => 'The Alchemist - Paulo Coelho',
                'package_code' => '347824',
                'price' => '100000.00',
                'description' => 'Special Novel from Paulo Coelho',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 12:59:42',
                'category_id' => 5,
                'sub_category_id' => 8,
            ),
            17 => 
            array (
                'id' => 152,
                'product_name' => 'test book',
                'package_code' => '12300',
                'price' => '7000.00',
                'description' => 'dfhshd',
                'compatibility' => 'ANDROID',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-12-07 07:55:00',
                'category_id' => 5,
                'sub_category_id' => 8,
            ),
            18 => 
            array (
                'id' => 59,
                'product_name' => 'Instagram',
                'package_code' => '1234',
                'price' => '12000.00',
                'description' => 'ew',
                'compatibility' => 'Android',
                'urldownload' => '',
                'status' => 'ACTIVE',
                'created' => '2016-10-27 16:51:51',
                'category_id' => 4,
                'sub_category_id' => 2,
            ),
            19 => 
            array (
                'id' => 144,
                'product_name' => 'test book physcology',
                'package_code' => '12300',
                'price' => '7000.00',
                'description' => 'dfhshd',
                'compatibility' => 'ANDROID',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-12-05 03:47:52',
                'category_id' => 5,
                'sub_category_id' => 9,
            ),
            20 => 
            array (
                'id' => 162,
                'product_name' => 'NEW PRODUCT TEST',
                'package_code' => '347824',
                'price' => '100000.00',
                'description' => 'rewrr',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2017-01-10 07:49:04',
                'category_id' => 4,
                'sub_category_id' => 2,
            ),
            21 => 
            array (
                'id' => 75,
                'product_name' => 'Warkop Reborn - Jangkrik Boss',
                'package_code' => '35252',
                'price' => '55000.00',
                'description' => 'Watch online this movie now.',
                'compatibility' => 'All Platform',
                'urldownload' => 'http://test.com',
                'status' => 'ACTIVE',
                'created' => '2016-11-02 11:24:00',
                'category_id' => 3,
                'sub_category_id' => 6,
            ),
        ));
        
        
    }
}