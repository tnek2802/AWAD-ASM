<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class transactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $transactionData = DB::connection('mysql')->select('SELECT * FROM transaction');

        DB::table('transaction')->insert([
            [
                'transaction_date' => '2023-03-21',
                'delivery_address' => '123 Kajang',
                'total_amount' => 100.0,
                'user_id' => 1,
            ],
            [
                'transaction_date' => '2023-03-22',
                'delivery_address' => '234 Kuala Lumpur',
                'total_amount' => 200.0,
                'user_id' => 2,
            ],
            [
                'transaction_date' => '2023-03-21',
                'delivery_address' => '321 Klang',
                'total_amount' => 300.00,
                'user_id' => 3,
            ],
            // add more rows as needed
        ]);
    }
}