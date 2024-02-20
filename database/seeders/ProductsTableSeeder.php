<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'name' => 'University Cap',
                'price' => 300.0,
                'stock' => 99,
                'image' => '1.png',
            ),
            1 => 
            array (
                'product_id' => 2,
                'name' => 'Hot & Cold Tumbler',
                'price' => 500.0,
                'stock' => 99,
                'image' => '2.png',
            ),
            2 => 
            array (
                'product_id' => 3,
                'name' => 'University Shirt',
                'price' => 400.0,
                'stock' => 99,
                'image' => '4.png',
            ),
            3 => 
            array (
                'product_id' => 4,
                'name' => 'University Hoodie',
                'price' => 700.0,
                'stock' => 99,
                'image' => '5.png',
            ),
            4 => 
            array (
                'product_id' => 5,
                'name' => 'University Planner',
                'price' => 300.0,
                'stock' => 99,
                'image' => '6.png',
            ),
            5 => 
            array (
                'product_id' => 6,
                'name' => 'University Mug',
                'price' => 350.0,
                'stock' => 99,
                'image' => '7.png',
            ),
            6 => 
            array (
                'product_id' => 7,
                'name' => 'University Cup',
                'price' => 250.0,
                'stock' => 99,
                'image' => '9.png',
            ),
            7 => 
            array (
                'product_id' => 8,
                'name' => 'University Pins',
                'price' => 200.0,
                'stock' => 99,
                'image' => '10.png',
            ),
        ));
        
        
    }
}