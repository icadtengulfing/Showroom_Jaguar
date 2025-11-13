<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Update enum values for model column
        DB::statement("ALTER TABLE contact_forms MODIFY COLUMN model ENUM(
            'F-Pace',
            'E-Pace',
            'E-Type',
            'F-Type',
            'Type00',
            'XK120',
            'XK140',
            'XK150',
            'I-Pace'
        )");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert to previous enum values if needed
        DB::statement("ALTER TABLE contact_forms MODIFY COLUMN model ENUM(
            'F-Pace',
            'F-Pace',
            'model_c',
            'model_d',
            'model_e'
        )");
    }
};
