<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSpecificationsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('car_specifications')->insert([
            [
                'model_name' => 'F-Pace',
                'range_km' => 64,
                'range_miles' => 40,
                'co2_emissions' => 39,
                'fuel_consumption_l_per_100km' => 1.7,
                'fuel_consumption_mpg' => 165.2,
                'loadspace_capacity_litres' => 1842,
                'charging_time_hours' => null,
                'top_speed_kmh' => null,
                'acceleration_seconds' => null,
                'maximum_power_ps' => null,
                'maximum_torque_nm' => null,
                'notes' => 'On F-PACE P400e.',
            ],
            [
                'model_name' => 'E-Pace',
                'range_km' => 60,
                'range_miles' => 37,
                'co2_emissions' => 33,
                'fuel_consumption_l_per_100km' => 1.4,
                'fuel_consumption_mpg' => 194.8,
                'loadspace_capacity_litres' => 601,
                'charging_time_hours' => null,
                'top_speed_kmh' => null,
                'acceleration_seconds' => null,
                'maximum_power_ps' => null,
                'maximum_torque_nm' => null,
                'notes' => 'On Jaguar E-PACE Electric Hybrid.',
            ],
            [
                'model_name' => 'I-Pace',
                'range_km' => 470,
                'range_miles' => 292,
                'co2_emissions' => 0,
                'fuel_consumption_l_per_100km' => null,
                'fuel_consumption_mpg' => null,
                'loadspace_capacity_litres' => null,
                'charging_time_hours' => 8.58,
                'top_speed_kmh' => null,
                'acceleration_seconds' => 4.8,
                'maximum_power_ps' => null,
                'maximum_torque_nm' => null,
                'notes' => '0-100 km/h in 4.8 secs.',
            ],
            [
                'model_name' => 'F-Type',
                'range_km' => null,
                'range_miles' => null,
                'co2_emissions' => null,
                'fuel_consumption_l_per_100km' => null,
                'fuel_consumption_mpg' => null,
                'loadspace_capacity_litres' => null,
                'charging_time_hours' => null,
                'top_speed_kmh' => 300,
                'acceleration_seconds' => 3.7,
                'maximum_power_ps' => 575,
                'maximum_torque_nm' => 700,
                'notes' => 'F-TYPE R75.',
            ],
        ]);
    }
}
