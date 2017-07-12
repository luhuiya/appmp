<?php

use Illuminate\Database\Seeder;

class VoucherTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('voucher')->delete();
        
        \DB::table('voucher')->insert(array (
            0 => 
            array (
                'id' => 4,
                'code' => 'NOVEMBER',
                'name' => 'Happy November',
                'startdate' => '2016-10-31 17:00:00',
                'enddate' => '2016-11-29 17:00:00',
                'maxclaim' => 2,
                'target_type' => 1,
                'is_active' => true,
                'disc' => 5,
            ),
            1 => 
            array (
                'id' => 7,
                'code' => 'ISLAMICNEWYEAR',
                'name' => 'Happy Islamic New Year',
                'startdate' => '2016-11-21 17:00:00',
                'enddate' => '2016-11-23 17:00:00',
                'maxclaim' => 2,
                'target_type' => 1,
                'is_active' => true,
                'disc' => 20,
            ),
            2 => 
            array (
                'id' => 10,
                'code' => 'DECEMBER',
                'name' => 'DECEMBER FUN2',
                'startdate' => '2016-11-30 18:05:00',
                'enddate' => '2016-12-30 18:05:00',
                'maxclaim' => 4,
                'target_type' => 1,
                'is_active' => true,
                'disc' => 11,
            ),
            3 => 
            array (
                'id' => 11,
                'code' => 'NEWYEAR2017',
                'name' => 'DISCOUNT 30 %',
                'startdate' => '2016-10-31 18:05:00',
                'enddate' => '2016-11-30 12:55:00',
                'maxclaim' => 1,
                'target_type' => 1,
                'is_active' => true,
                'disc' => 30,
            ),
            4 => 
            array (
                'id' => 18,
                'code' => 'CHRISTMAS122',
                'name' => 'Christmas 122',
                'startdate' => '2016-11-30 18:05:00',
                'enddate' => '2016-12-30 18:05:00',
                'maxclaim' => 1,
                'target_type' => 1,
                'is_active' => true,
                'disc' => 10,
            ),
            5 => 
            array (
                'id' => 16,
                'code' => 'CHRISTMAS12DIT',
                'name' => 'Christmas 12',
                'startdate' => '2016-11-30 18:05:00',
                'enddate' => '2016-12-30 18:05:00',
                'maxclaim' => 1,
                'target_type' => 1,
                'is_active' => true,
                'disc' => 10,
            ),
            6 => 
            array (
                'id' => 5,
                'code' => 'SEPTEMBER1',
                'name' => 'Happy September',
                'startdate' => '2016-08-31 17:00:00',
                'enddate' => '2016-09-29 17:00:00',
                'maxclaim' => 1,
                'target_type' => 1,
                'is_active' => true,
                'disc' => 15,
            ),
            7 => 
            array (
                'id' => 3,
                'code' => 'NEWYEAR1701',
                'name' => 'DJKFHAS',
                'startdate' => '2016-10-31 18:05:00',
                'enddate' => '2016-11-30 12:55:00',
                'maxclaim' => 2,
                'target_type' => 1,
                'is_active' => true,
                'disc' => 10,
            ),
        ));
        
        
    }
}