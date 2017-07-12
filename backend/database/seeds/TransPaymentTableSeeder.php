<?php

use Illuminate\Database\Seeder;

class TransPaymentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trans_payment')->delete();
        
        \DB::table('trans_payment')->insert(array (
            0 => 
            array (
                'id' => 48,
                'trans_id' => '77',
                'detail_id' => 77,
                'payment_method' => '01',
                'created' => '2017-01-06 06:45:32',
                'urldownload' => NULL,
                'times_download' => NULL,
                'max' => NULL,
                'token' => 'EC-7VB19857PF320573D',
                'user_id' => 1,
                'price' => '7.52',
                'status' => 0,
                'url_callback' => 'http://172.19.16.47:70/onestop/',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            1 => 
            array (
                'id' => 50,
                'trans_id' => 'PAY-6DA38199JJ055532FLBXT6LA',
                'detail_id' => 77,
                'payment_method' => '01',
                'created' => '2017-01-06 06:54:36',
                'urldownload' => NULL,
                'times_download' => NULL,
                'max' => NULL,
                'token' => 'EC-67U002221U910412J',
                'user_id' => 1,
                'price' => '7.52',
                'status' => 0,
                'url_callback' => 'http://172.19.16.47:70/onestop/',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            2 => 
            array (
                'id' => 51,
                'trans_id' => 'PAY-8WD214498F9638204LBXU6BQ',
                'detail_id' => 75,
                'payment_method' => '01',
                'created' => '2017-01-06 08:02:14',
                'urldownload' => NULL,
                'times_download' => NULL,
                'max' => NULL,
                'token' => 'EC-15778974F1344992X',
                'user_id' => 2,
                'price' => '4.14',
                'status' => 1,
                'url_callback' => 'http://172.19.16.156:8020/#/details/75',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            3 => 
            array (
                'id' => 52,
                'trans_id' => 'PAY-4ER52534NY947894SLBXU7AY',
                'detail_id' => 75,
                'payment_method' => '01',
                'created' => '2017-01-06 08:04:20',
                'urldownload' => NULL,
                'times_download' => NULL,
                'max' => NULL,
                'token' => 'EC-66G52535BM929392W',
                'user_id' => 2,
                'price' => '4.14',
                'status' => 1,
                'url_callback' => 'http://172.19.16.156:8020/#/payment/thankyou/75',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            4 => 
            array (
                'id' => 53,
                'trans_id' => 'PAY-78T30235RB5733430LBXVBDI',
                'detail_id' => 75,
                'payment_method' => '01',
                'created' => '2017-01-06 08:08:45',
                'urldownload' => NULL,
                'times_download' => NULL,
                'max' => NULL,
                'token' => 'EC-5BL18778JP7255616',
                'user_id' => 2,
                'price' => '4.14',
                'status' => 1,
                'url_callback' => 'http://172.19.16.156:8020/#/payment/thankyou/75',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            5 => 
            array (
                'id' => 54,
                'trans_id' => 'PAY-4HJ99604NA712964BLBXVC2I',
                'detail_id' => 75,
                'payment_method' => '01',
                'created' => '2017-01-06 08:12:25',
                'urldownload' => NULL,
                'times_download' => NULL,
                'max' => NULL,
                'token' => 'EC-34853531V02383227',
                'user_id' => 2,
                'price' => '4.14',
                'status' => 1,
                'url_callback' => 'http://172.19.16.156:8020/#/payment/thankyou/75',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            6 => 
            array (
                'id' => 55,
                'trans_id' => 'PAY-83777309F54049059LBZOMBQ',
                'detail_id' => 75,
                'payment_method' => '01',
                'created' => '2017-01-09 01:23:17',
                'urldownload' => NULL,
                'times_download' => 6,
                'max' => NULL,
                'token' => 'EC-80X67690MA395693C',
                'user_id' => 2,
                'price' => '4.14',
                'status' => 1,
                'url_callback' => 'http://172.19.16.156:8020/#/payment/thankyou/75',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            7 => 
            array (
                'id' => 56,
                'trans_id' => 'PAY-8V9461053Y777892RLBZT5JA',
                'detail_id' => 122,
                'payment_method' => '01',
                'created' => '2017-01-09 07:41:24',
                'urldownload' => NULL,
                'times_download' => 1,
                'max' => NULL,
                'token' => 'EC-2JP741826P840501A',
                'user_id' => 2,
                'price' => '0.94',
                'status' => 1,
                'url_callback' => 'http://172.19.16.156:8020/#/payment/thankyou/122',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            8 => 
            array (
                'id' => 57,
                'trans_id' => 'PAY-8JT118342F7283738LBZT6RA',
                'detail_id' => 122,
                'payment_method' => '01',
                'created' => '2017-01-09 07:44:04',
                'urldownload' => NULL,
                'times_download' => NULL,
                'max' => NULL,
                'token' => 'EC-1M486383S0173421G',
                'user_id' => 2,
                'price' => '0.94',
                'status' => -1,
                'url_callback' => 'http://172.19.16.156:8020/#/payment/thankyou/122',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            9 => 
            array (
                'id' => 58,
                'trans_id' => 'PAY-97785427WB451630MLB2DYXI',
                'detail_id' => 61,
                'payment_method' => '01',
                'created' => '2017-01-10 01:43:57',
                'urldownload' => NULL,
                'times_download' => 1,
                'max' => NULL,
                'token' => 'EC-98F00421T90002633',
                'user_id' => 2,
                'price' => '0.38',
                'status' => 1,
                'url_callback' => 'http://172.19.16.156:8020/#/payment/thankyou/61',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
            10 => 
            array (
                'id' => 59,
                'trans_id' => 'PAY-8NL932819R014770NLB2EX7I',
                'detail_id' => 75,
                'payment_method' => '01',
                'created' => '2017-01-10 02:50:37',
                'urldownload' => NULL,
                'times_download' => 1,
                'max' => NULL,
                'token' => 'EC-2TB1537799172673V',
                'user_id' => 2,
                'price' => '4.14',
                'status' => 1,
                'url_callback' => 'http://172.19.16.156:8020/#/payment/thankyou/75',
                'payment_target' => '01',
                'voucher_code' => '',
            ),
        ));
        
        
    }
}