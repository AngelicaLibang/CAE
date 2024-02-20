<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'order_id' => 10,
                'time_placed' => '2024-02-17 10:53:23',
                'status' => 'waiting',
                'updated_at' => '2024-02-17 02:53:23',
                'user_id' => 1601,
                'created_at' => '2024-02-17 02:53:23',
            ),
            1 => 
            array (
                'order_id' => 11,
                'time_placed' => '2024-02-17 10:55:20',
                'status' => 'waiting',
                'updated_at' => '2024-02-17 02:55:19',
                'user_id' => 1601,
                'created_at' => '2024-02-17 02:55:19',
            ),
            2 => 
            array (
                'order_id' => 12,
                'time_placed' => '2024-02-17 10:56:39',
                'status' => 'waiting',
                'updated_at' => '2024-02-17 02:56:39',
                'user_id' => 1601,
                'created_at' => '2024-02-17 02:56:39',
            ),
            3 => 
            array (
                'order_id' => 13,
                'time_placed' => '2024-02-17 10:57:07',
                'status' => 'waiting',
                'updated_at' => '2024-02-17 02:57:07',
                'user_id' => 1601,
                'created_at' => '2024-02-17 02:57:07',
            ),
            4 => 
            array (
                'order_id' => 14,
                'time_placed' => '2024-02-18 14:12:07',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:12:07',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:12:07',
            ),
            5 => 
            array (
                'order_id' => 15,
                'time_placed' => '2024-02-18 14:12:22',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:12:22',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:12:22',
            ),
            6 => 
            array (
                'order_id' => 16,
                'time_placed' => '2024-02-18 14:17:10',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:17:10',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:17:10',
            ),
            7 => 
            array (
                'order_id' => 17,
                'time_placed' => '2024-02-18 14:18:21',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:18:21',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:18:21',
            ),
            8 => 
            array (
                'order_id' => 18,
                'time_placed' => '2024-02-18 14:18:32',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:18:32',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:18:32',
            ),
            9 => 
            array (
                'order_id' => 19,
                'time_placed' => '2024-02-18 14:19:29',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:19:29',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:19:29',
            ),
            10 => 
            array (
                'order_id' => 20,
                'time_placed' => '2024-02-18 14:19:38',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:19:38',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:19:38',
            ),
            11 => 
            array (
                'order_id' => 21,
                'time_placed' => '2024-02-18 14:20:39',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:20:39',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:20:39',
            ),
            12 => 
            array (
                'order_id' => 22,
                'time_placed' => '2024-02-18 14:20:44',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:20:44',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:20:44',
            ),
            13 => 
            array (
                'order_id' => 23,
                'time_placed' => '2024-02-18 14:21:41',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:21:41',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:21:41',
            ),
            14 => 
            array (
                'order_id' => 24,
                'time_placed' => '2024-02-18 14:22:19',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:22:19',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:22:19',
            ),
            15 => 
            array (
                'order_id' => 25,
                'time_placed' => '2024-02-18 14:23:08',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:23:08',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:23:08',
            ),
            16 => 
            array (
                'order_id' => 26,
                'time_placed' => '2024-02-18 14:23:30',
                'status' => 'waiting',
                'updated_at' => '2024-02-18 06:23:29',
                'user_id' => 1601,
                'created_at' => '2024-02-18 06:23:29',
            ),
            17 => 
            array (
                'order_id' => 27,
                'time_placed' => '2024-02-19 11:02:45',
                'status' => 'waiting',
                'updated_at' => '2024-02-19 03:02:45',
                'user_id' => 1601,
                'created_at' => '2024-02-19 03:02:45',
            ),
            18 => 
            array (
                'order_id' => 28,
                'time_placed' => '2024-02-19 11:05:54',
                'status' => 'waiting',
                'updated_at' => '2024-02-19 03:05:54',
                'user_id' => 1601,
                'created_at' => '2024-02-19 03:05:54',
            ),
            19 => 
            array (
                'order_id' => 29,
                'time_placed' => '2024-02-19 11:23:59',
                'status' => 'waiting',
                'updated_at' => '2024-02-19 03:23:59',
                'user_id' => 1601,
                'created_at' => '2024-02-19 03:23:59',
            ),
            20 => 
            array (
                'order_id' => 30,
                'time_placed' => '2024-02-19 11:24:13',
                'status' => 'waiting',
                'updated_at' => '2024-02-19 03:24:13',
                'user_id' => 1601,
                'created_at' => '2024-02-19 03:24:13',
            ),
            21 => 
            array (
                'order_id' => 31,
                'time_placed' => '2024-02-19 11:25:28',
                'status' => 'waiting',
                'updated_at' => '2024-02-19 03:25:27',
                'user_id' => 1601,
                'created_at' => '2024-02-19 03:25:27',
            ),
            22 => 
            array (
                'order_id' => 32,
                'time_placed' => '2024-02-19 11:25:45',
                'status' => 'waiting',
                'updated_at' => '2024-02-19 03:25:45',
                'user_id' => 1601,
                'created_at' => '2024-02-19 03:25:45',
            ),
            23 => 
            array (
                'order_id' => 33,
                'time_placed' => '2024-02-19 15:11:18',
                'status' => 'waiting',
                'updated_at' => '2024-02-19 07:11:18',
                'user_id' => 1,
                'created_at' => '2024-02-19 07:11:18',
            ),
            24 => 
            array (
                'order_id' => 34,
                'time_placed' => '2024-02-19 15:18:47',
                'status' => 'waiting',
                'updated_at' => '2024-02-19 07:18:47',
                'user_id' => 1,
                'created_at' => '2024-02-19 07:18:47',
            ),
        ));
        
        
    }
}