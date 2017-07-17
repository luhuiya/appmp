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

        \DB::table('prdposition')->delete();
        
        \DB::table('prdposition')->insert(array (
            0 => 
            array (
                'id' => 35,
                'product_id' => 59,
                'position' => 0,
                'category' => '4',
                'subcategory' => '3',
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
                'category' => 6,
                'subcategory' => 4,
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
                'category' => 5,
                'subcategory' => 7,
                'position_top' => 0,
                'created' => '2016-11-02 12:59:42',
            ),
            16 => 
            array (
                'id' => 52,
                'product_id' => 78,
                'position' => 0,
                'category' => 3,
                'subcategory' => 7,
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
        
        \DB::table('product_image')->delete();
        
        \DB::table('product_image')->insert(array (
            0 => 
            array (
                'id' => 51,
                'product_id' => 67,
                'image_type_id' => 1,
                'image' => '862487307d8a2ac2a44e240f6d66b03c.png',
                'image_url' => 'http://172.19.16.156:8000/storage/862487307d8a2ac2a44e240f6d66b03c.png',
            ),
            1 => 
            array (
                'id' => 62,
                'product_id' => 59,
                'image_type_id' => 1,
                'image' => '676cd5becd36dde1e197073ece597908.png',
                'image_url' => 'http://172.19.16.156:8000/storage/676cd5becd36dde1e197073ece597908.png',
            ),
            2 => 
            array (
                'id' => 53,
                'product_id' => 69,
                'image_type_id' => 1,
                'image' => 'c54815fe8f8ff73aa2257e2efcce205a.png',
                'image_url' => 'http://172.19.16.156:8000/storage/c54815fe8f8ff73aa2257e2efcce205a.png',
            ),
            3 => 
            array (
                'id' => 44,
                'product_id' => 77,
                'image_type_id' => 1,
                'image' => 'logo.png',
                'image_url' => 'http://172.19.16.156:8010/bundles/framework/images/logo.png',
            ),
            4 => 
            array (
                'id' => 48,
                'product_id' => 63,
                'image_type_id' => 1,
                'image' => '01c7c8f25b61cba6535706885bf81e92.png',
                'image_url' => 'http://172.19.16.156:8000/storage/01c7c8f25b61cba6535706885bf81e92.png',
            ),
            5 => 
            array (
                'id' => 52,
                'product_id' => 68,
                'image_type_id' => 1,
                'image' => 'd93de663ec681676fd567e61596b66c7.png',
                'image_url' => 'http://172.19.16.156:8000/storage/d93de663ec681676fd567e61596b66c7.png',
            ),
            6 => 
            array (
                'id' => 50,
                'product_id' => 66,
                'image_type_id' => 1,
                'image' => '95e06d36b99d5a06ec2ac43ec4b9a350.png',
                'image_url' => 'http://172.19.16.156:8000/storage/95e06d36b99d5a06ec2ac43ec4b9a350.png',
            ),
            7 => 
            array (
                'id' => 49,
                'product_id' => 64,
                'image_type_id' => 1,
                'image' => '97e96ee38cdb1c0ea06dfd926f950125.png',
                'image_url' => 'http://172.19.16.156:8000/storage/97e96ee38cdb1c0ea06dfd926f950125.png',
            ),
            8 => 
            array (
                'id' => 42,
                'product_id' => 122,
                'image_type_id' => 1,
                'image' => 'bb1cbd81da84dadd73b71575803e022b.png',
                'image_url' => 'http://172.19.16.156:8000/storage/bb1cbd81da84dadd73b71575803e022b.png',
            ),
            9 => 
            array (
                'id' => 61,
                'product_id' => 78,
                'image_type_id' => 1,
                'image' => '331ded7b69a3fa7e1910e38d8eb8bd0f.jpg',
                'image_url' => 'http://172.19.16.156:8000/storage/331ded7b69a3fa7e1910e38d8eb8bd0f.jpg',
            ),
            10 => 
            array (
                'id' => 64,
                'product_id' => 144,
                'image_type_id' => 1,
                'image' => 'ead50e96e1b5fe1db82af28fc2fde086.png',
                'image_url' => 'http://172.19.16.156:8000/storage/ead50e96e1b5fe1db82af28fc2fde086.png',
            ),
            11 => 
            array (
                'id' => 54,
                'product_id' => 70,
                'image_type_id' => 1,
                'image' => 'f5286dda1b23b8eedb134d1a563adf43.jpg',
                'image_url' => 'http://172.19.16.156:8000/storage/f5286dda1b23b8eedb134d1a563adf43.jpg',
            ),
            12 => 
            array (
                'id' => 55,
                'product_id' => 71,
                'image_type_id' => 1,
                'image' => '49eaaef7bd486f0977c2aa85a16cee24.jpg',
                'image_url' => 'http://172.19.16.156:8000/storage/49eaaef7bd486f0977c2aa85a16cee24.jpg',
            ),
            13 => 
            array (
                'id' => 57,
                'product_id' => 73,
                'image_type_id' => 1,
                'image' => 'e0f0265f6f1c930d07fb5e1d6894a32b.jpg',
                'image_url' => 'http://172.19.16.156:8000/storage/e0f0265f6f1c930d07fb5e1d6894a32b.jpg',
            ),
            14 => 
            array (
                'id' => 56,
                'product_id' => 72,
                'image_type_id' => 1,
                'image' => '9b3f4076f48b15408907255b3c51f4b4.jpg',
                'image_url' => 'http://172.19.16.156:8000/storage/9b3f4076f48b15408907255b3c51f4b4.jpg',
            ),
            15 => 
            array (
                'id' => 58,
                'product_id' => 74,
                'image_type_id' => 1,
                'image' => '2763396ed71bdcd9931e1d4b50df891d.jpg',
                'image_url' => 'http://172.19.16.156:8000/storage/2763396ed71bdcd9931e1d4b50df891d.jpg',
            ),
            16 => 
            array (
                'id' => 47,
                'product_id' => 62,
                'image_type_id' => 1,
                'image' => '4dee5ea5a767ccf9deb613baf07fdd22.png',
                'image_url' => 'http://172.19.16.156:8000/storage/4dee5ea5a767ccf9deb613baf07fdd22.png',
            ),
            17 => 
            array (
                'id' => 78,
                'product_id' => 162,
                'image_type_id' => 1,
                'image' => '4fb9b8af4dedd0d695d7aad9c31170f8.png',
                'image_url' => 'http://172.19.16.156:8000/storage/4fb9b8af4dedd0d695d7aad9c31170f8.png',
            ),
            18 => 
            array (
                'id' => 59,
                'product_id' => 75,
                'image_type_id' => 1,
                'image' => '6a6690ac97be5b330a1c2fd16666bc88.jpeg',
                'image_url' => 'http://172.19.16.156:8000/storage/6a6690ac97be5b330a1c2fd16666bc88.jpeg',
            ),
            19 => 
            array (
                'id' => 60,
                'product_id' => 77,
                'image_type_id' => 1,
                'image' => 'c8ca85e657f995e6b61e0495ad7a09c5.png',
                'image_url' => 'http://172.19.16.156:8000/storage/c8ca85e657f995e6b61e0495ad7a09c5.png',
            ),
            20 => 
            array (
                'id' => 71,
                'product_id' => 152,
                'image_type_id' => 1,
                'image' => '2b44c9ac3ed53d9c868d4dabee3bbd2c.png',
                'image_url' => 'http://172.19.16.156:8000/storage/2b44c9ac3ed53d9c868d4dabee3bbd2c.png',
            ),
            21 => 
            array (
                'id' => 46,
                'product_id' => 61,
                'image_type_id' => 1,
                'image' => 'b489014de56586bb18447b298d6cc949.png',
                'image_url' => 'http://172.19.16.156:8000/storage/b489014de56586bb18447b298d6cc949.png',
            ),
            22 => 
            array (
                'id' => 63,
                'product_id' => 123,
                'image_type_id' => 1,
                'image' => 'logo.png',
                'image_url' => 'http://172.19.16.156:8010/bundles/framework/images/logo.png',
            ),
            23 => 
            array (
                'id' => 43,
                'product_id' => 123,
                'image_type_id' => 1,
                'image' => '9c31b4c5441856aced5431ad332f623f.jpeg',
                'image_url' => 'http://172.19.16.156:8010/uploads/images/9c31b4c5441856aced5431ad332f623f.jpeg',
            ),
        ));
        
        
    }
}