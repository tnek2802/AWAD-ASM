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
    {//	username	password	email	user_type	contact_num	address	
        for($i = 1; $i <= 9; $i++) {
            DB::table('user')->insert([
            [
                'username' => 'user'.$i,
                'password' => bcrypt('password'),
                'email' => 'user'.$i.'@gmail.com',
                'user_type' => '1',
                'contact_num' => '012123123'.$i,
                'address' => 'address'.$i,
            ],
        ]);
     }

         DB::table('user')->insert([
            [
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'email' => 'admin@gmail.com',
                'user_type' => '0',
                'contact_num' => '0121231230',
                'address' => 'admin_address',
            ],
        ]);
    }
}
