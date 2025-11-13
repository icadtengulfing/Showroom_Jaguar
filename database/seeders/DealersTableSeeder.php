<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('dealers')->insert([
            [
                'image' => 'images/defaults/default-dealer.jpg',
                'name' => 'Jaguar Land Rover Jakarta',
                'email' => 'info@jaguarjakarta.co.id',
                'phone' => '+62 21 723 0088',
                'address' => 'Jl. Sultan Iskandar Muda No.51, Kebayoran Lama, Jakarta Selatan, DKI Jakarta 12240',
                'country' => 'Indonesia',
                'maps_link' => 'https://maps.app.goo.gl/mB92Z1z7G6oin2rD8', // ← SAMA SEMUA
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'images/defaults/default-dealer.jpg',
                'name' => 'Jaguar Land Rover Surabaya',
                'email' => 'info@jaguarsurabaya.co.id',
                'phone' => '+62 31 855 8888',
                'address' => 'Jl. HR Muhammad No.2, Surabaya, Jawa Timur 60226',
                'country' => 'Indonesia',
                'maps_link' => 'https://maps.app.goo.gl/mB92Z1z7G6oin2rD8', // ← SAMA SEMUA
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'images/defaults/default-dealer.jpg',
                'name' => 'Jaguar Land Rover Bali',
                'email' => 'info@jaguarbali.co.id',
                'phone' => '+62 361 849 8888',
                'address' => 'Jl. Sunset Road No.8, Kuta, Bali 80361',
                'country' => 'Indonesia',
                'maps_link' => 'https://maps.app.goo.gl/mB92Z1z7G6oin2rD8', // ← SAMA SEMUA
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
