<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contact_forms')->insert([
            [
                'dealer_id' => 1,
                'fullname' => 'John Pork',
                'email' => 'john@example.com',
                'phone' => '+62 812 8888 9999',
                'country' => 'Indonesia',
                'model' => 'F-Pace',
                'message' => 'Saya ingin melakukan test drive.',
            ],
        ]);
    }
}
