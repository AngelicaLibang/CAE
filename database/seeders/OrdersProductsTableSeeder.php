<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders_products')->delete();
        
        \DB::table('orders_products')->insert(array (
            0 => 
            array (
                'order_id' => 1,
                'product_id' => 4,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:17:10',
                'created_at' => '2024-02-18 06:17:10',
            ),
            1 => 
            array (
                'order_id' => 2,
                'product_id' => 4,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:18:21',
                'created_at' => '2024-02-18 06:18:21',
            ),
            2 => 
            array (
                'order_id' => 3,
                'product_id' => 1,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:18:33',
                'created_at' => '2024-02-18 06:18:33',
            ),
            3 => 
            array (
                'order_id' => 4,
                'product_id' => 1,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:19:29',
                'created_at' => '2024-02-18 06:19:29',
            ),
            4 => 
            array (
                'order_id' => 5,
                'product_id' => 1,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:19:38',
                'created_at' => '2024-02-18 06:19:38',
            ),
            5 => 
            array (
                'order_id' => 6,
                'product_id' => 7,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:19:38',
                'created_at' => '2024-02-18 06:19:38',
            ),
            6 => 
            array (
                'order_id' => 7,
                'product_id' => 1,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:20:39',
                'created_at' => '2024-02-18 06:20:39',
            ),
            7 => 
            array (
                'order_id' => 8,
                'product_id' => 7,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:20:39',
                'created_at' => '2024-02-18 06:20:39',
            ),
            8 => 
            array (
                'order_id' => 9,
                'product_id' => 1,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:20:44',
                'created_at' => '2024-02-18 06:20:44',
            ),
            9 => 
            array (
                'order_id' => 10,
                'product_id' => 7,
                'quantity' => 2,
                'updated_at' => '2024-02-18 06:20:44',
                'created_at' => '2024-02-18 06:20:44',
            ),
            10 => 
            array (
                'order_id' => 11,
                'product_id' => 1,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:21:41',
                'created_at' => '2024-02-18 06:21:41',
            ),
            11 => 
            array (
                'order_id' => 12,
                'product_id' => 7,
                'quantity' => 2,
                'updated_at' => '2024-02-18 06:21:41',
                'created_at' => '2024-02-18 06:21:41',
            ),
            12 => 
            array (
                'order_id' => 13,
                'product_id' => 1,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:22:19',
                'created_at' => '2024-02-18 06:22:19',
            ),
            13 => 
            array (
                'order_id' => 14,
                'product_id' => 7,
                'quantity' => 2,
                'updated_at' => '2024-02-18 06:22:19',
                'created_at' => '2024-02-18 06:22:19',
            ),
            14 => 
            array (
                'order_id' => 15,
                'product_id' => 1,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:23:08',
                'created_at' => '2024-02-18 06:23:08',
            ),
            15 => 
            array (
                'order_id' => 16,
                'product_id' => 7,
                'quantity' => 2,
                'updated_at' => '2024-02-18 06:23:08',
                'created_at' => '2024-02-18 06:23:08',
            ),
            16 => 
            array (
                'order_id' => 17,
                'product_id' => 1,
                'quantity' => 1,
                'updated_at' => '2024-02-18 06:23:30',
                'created_at' => '2024-02-18 06:23:30',
            ),
            17 => 
            array (
                'order_id' => 18,
                'product_id' => 7,
                'quantity' => 2,
                'updated_at' => '2024-02-18 06:23:30',
                'created_at' => '2024-02-18 06:23:30',
            ),
            18 => 
            array (
                'order_id' => 19,
                'product_id' => 5,
                'quantity' => 1,
                'updated_at' => '2024-02-19 03:02:45',
                'created_at' => '2024-02-19 03:02:45',
            ),
            19 => 
            array (
                'order_id' => 20,
                'product_id' => 5,
                'quantity' => 1,
                'updated_at' => '2024-02-19 03:05:54',
                'created_at' => '2024-02-19 03:05:54',
            ),
            20 => 
            array (
                'order_id' => 21,
                'product_id' => 4,
                'quantity' => 1,
                'updated_at' => '2024-02-19 03:24:13',
                'created_at' => '2024-02-19 03:24:13',
            ),
            21 => 
            array (
                'order_id' => 22,
                'product_id' => 7,
                'quantity' => 2,
                'updated_at' => '2024-02-19 03:25:28',
                'created_at' => '2024-02-19 03:25:28',
            ),
            22 => 
            array (
                'order_id' => 23,
                'product_id' => 7,
                'quantity' => 2,
                'updated_at' => '2024-02-19 03:25:45',
                'created_at' => '2024-02-19 03:25:45',
            ),
            23 => 
            array (
                'order_id' => 24,
                'product_id' => 8,
                'quantity' => 2,
                'updated_at' => '2024-02-19 07:11:18',
                'created_at' => '2024-02-19 07:11:18',
            ),
            24 => 
            array (
                'order_id' => 25,
                'product_id' => 1,
                'quantity' => 2,
                'updated_at' => '2024-02-19 07:18:47',
                'created_at' => '2024-02-19 07:18:47',
            ),
        ));
        
        
    }
}