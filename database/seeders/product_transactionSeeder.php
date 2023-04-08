<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class product_transactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_transaction')->insert([
            [
                'product_id' => '1',
                'transaction_id' => '1',
                'transaction_quantity' => 100.0,
            ],
            // add more rows as needed
        ]);
    }
}
