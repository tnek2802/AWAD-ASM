<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Size;

class sizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 32; $i++) {
            Size::factory()->count(1)->create([
                'product_id' => $i,
            ]);
        }
    }
}
