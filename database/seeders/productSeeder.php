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
            ]
        ]);
    }
}
