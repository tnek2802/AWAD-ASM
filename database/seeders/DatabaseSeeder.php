<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(productSeeder::class);
        $this->call(productTransactionSeeder::class);
        $this->call(transactionSeeder::class);
        $this->call(userSeeder::class);
    }
}
