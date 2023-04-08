<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'product_type' => 'Kid',
                'product_category' => 'Footwear',
                'product_description' => 'Reflection 073',
                'product_name' => 'New Balance 574',
                'product_price' => 379.00,
                'image' => 'public\images\1.png', 
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
            [
                'product_type' => 'Kid',
                'product_category' => 'Footwear',
                'product_description' => 'Grey-Cosmic',
                'product_name' => 'Nike E-Series',
                'product_price' => 488.00,
                'image' => 'public\images\2.png', 
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
            [
                'product_type' => 'Men',
                'product_category' => 'Footwear',
                'product_description' => 'Silver-Mint',
                'product_name' => 'Nike Dunk Low',
                'product_price' => 539.00,
                'image' => 'public\images\3.png', 
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
            [
                'product_type' => 'Men',
                'product_category' => 'Footwear',
                'product_description' => 'Sea Salt 108',
                'product_name' => 'New Balance Neo',
                'product_price' => 699.00,
                'image' => 'public\images\4.png', 
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
            [
                'product_type' => 'Men',
                'product_category' => 'Footwear',
                'product_description' => 'White-In-Blue',
                'product_name' => 'Nike Air Force 3',
                'product_price' => 450.00,
                'image' => 'public\images\5.png', 
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
            [
                'product_type' => 'Men',
                'product_category' => 'Footwear',
                'product_description' => 'Black-Dk-Grey',
                'product_name' => 'Nike Air Trainer',
                'product_price' => 589.00,
                'image' => 'public\images\6.png', 
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
            [
                'product_type' => 'Men',
                'product_category' => 'Footwear',
                'product_description' => 'Multi-Colour',
                'product_name' => 'Nike Lebron XX',
                'product_price' => 919.00,
                'image' => 'public\images\7.png', 
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
            [
                'product_type' => 'Men',
                'product_category' => 'Footwear',
                'product_description' => 'Nike Dunk Higg',
                'product_name' => 'Chill-Blue',
                'product_price' => 425.00,
                'image' => 'public\images\8.png', 
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
        ]);
    }
}
