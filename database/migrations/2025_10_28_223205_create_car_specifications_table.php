<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('car_specifications', function (Blueprint $table) {
            $table->id();
            $table->string('model_name', 50);
            $table->decimal('range_km', 6, 2)->nullable();
            $table->decimal('range_miles', 6, 2)->nullable();
            $table->decimal('co2_emissions', 6, 2)->nullable();
            $table->decimal('fuel_consumption_l_per_100km', 6, 2)->nullable();
            $table->decimal('fuel_consumption_mpg', 6, 2)->nullable();
            $table->integer('loadspace_capacity_litres')->nullable();
            $table->decimal('charging_time_hours', 6, 2)->nullable();
            $table->integer('top_speed_kmh')->nullable();
            $table->decimal('acceleration_seconds', 4, 2)->nullable();
            $table->integer('maximum_power_ps')->nullable();
            $table->integer('maximum_torque_nm')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_specifications');
    }
};
