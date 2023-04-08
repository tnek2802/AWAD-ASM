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
        Size::factory()->count(32)->create();
    }
}
