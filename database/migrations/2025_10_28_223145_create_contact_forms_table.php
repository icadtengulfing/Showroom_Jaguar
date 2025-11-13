<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dealer_id')->constrained('dealers')->onDelete('cascade');
            $table->string('fullname', 100);
            $table->string('email', 150);
            $table->string('phone', 50);
            $table->string('country', 100);
            $table->enum('model', [
                'F-Pace',
                'E-Pace',
                'E-Type',
                'F-Type',
                'Type00',
                'XK120',
                'XK140',
                'XK150',
                'I-Pace'
            ]);
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};
