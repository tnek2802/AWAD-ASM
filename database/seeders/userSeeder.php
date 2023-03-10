<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'username' => 'dummyname',
                'password' => 'lalala',
                'email' => 'dummy@gmail.com',
                'user_type' => '1',
                'contact_num' => 123123,
                'address' => '123123 street Sg Long',
            ],
            // add more rows as needed
        ]);
    }
}
