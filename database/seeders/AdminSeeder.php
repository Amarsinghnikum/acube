<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Satyendra Singh',
            'email' => 'satyendra@gmail.com',
            'username' => 'satyendra',
            'phone' => '9910267627',
            'password' =>  Hash::make('S@tyendra@1234'),
        ]);
    }
}
