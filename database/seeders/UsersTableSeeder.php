<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'full_name' => 'John F Kennedy',
                'email' => 'Johnpark@gmail.com',
                'password' => Hash::make('password111'),
                'phone' => '+62 812 3456 7890',
            ],
        ]);
    }
}
