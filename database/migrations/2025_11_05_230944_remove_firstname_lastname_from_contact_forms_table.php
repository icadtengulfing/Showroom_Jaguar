<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            // Drop first_name and last_name columns if they exist
            if (Schema::hasColumn('contact_forms', 'first_name')) {
                $table->dropColumn('first_name');
            }
            if (Schema::hasColumn('contact_forms', 'last_name')) {
                $table->dropColumn('last_name');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            // Add back the columns if needed to rollback
            $table->string('first_name', 100)->after('dealer_id');
            $table->string('last_name', 100)->after('first_name');
        });
    }
};
