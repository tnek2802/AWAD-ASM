<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
                'product_type' => 'M',
                'product_category' => 'Footwear',
                'product_description' => 'shoes1',
                'product_name' => 'product1',
                'product_price' => 100.00,
                'product_size' => 'UK8',
                'product_quantity' => 30,
                // 'image' => 1,
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
            [
                'product_type' => 'M',
                'product_category' => 'Footwear',
                'product_description' => 'shoes2',
                'product_name' => 'product2',
                'product_price' => 150.00,
                'product_size' => 'UK8',
                'product_quantity' => 30,
                // 'image' => 1,
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
            [
                'product_type' => 'M',
                'product_category' => 'Footwear',
                'product_description' => 'shoes3',
                'product_name' => 'product3',
                'product_price' => 200.00,
                'product_size' => 'UK8',
                'product_quantity' => 30,
                // 'image' => 1,
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
        ]);
    }
}
