<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil semua seeder yang kamu punya di sini
        $this->call([
            DealersTableSeeder::class,
            UsersTableSeeder::class,
            ContactFormsTableSeeder::class,
            CarSpecificationsTableSeeder::class,
        ]);
    }
}
