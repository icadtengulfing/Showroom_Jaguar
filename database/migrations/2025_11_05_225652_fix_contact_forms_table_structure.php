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
            // Check and add fullname if doesn't exist
            if (!Schema::hasColumn('contact_forms', 'fullname')) {
                $table->string('fullname', 100)->after('dealer_id');
            }

            // Check and add updated_at if doesn't exist
            if (!Schema::hasColumn('contact_forms', 'updated_at')) {
                $table->timestamp('updated_at')->nullable()->after('created_at');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            if (Schema::hasColumn('contact_forms', 'fullname')) {
                $table->dropColumn('fullname');
            }
            if (Schema::hasColumn('contact_forms', 'updated_at')) {
                $table->dropColumn('updated_at');
            }
        });
    }
};
