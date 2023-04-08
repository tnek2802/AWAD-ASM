<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 9; $i++) {
            DB::table('users')->insert([
            [
                'username' => 'user'.$i,
                'password' => bcrypt('password'),
                'email' => 'user'.$i.'@gmail.com',
                'role' => 'u',
                'contact_num' => '012123123'.$i,
                'address' => 'address'.$i,
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
        ]);
     }

         DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'email' => 'admin@gmail.com',
                'role' => 'a',
                'contact_num' => '0121231230',
                'address' => 'admin_address',
                'created_at' => '2023-03-21',
                'updated_at' => '2023-03-21',
            ],
        ]);
    }
}
