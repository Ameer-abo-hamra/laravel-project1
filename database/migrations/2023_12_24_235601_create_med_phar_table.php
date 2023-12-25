<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('med_phar', function (Blueprint $table) {
            $table->id();
            $table->foreignId("pharmacist_id")->references('id')->on('pharmacists');
            $table->foreignId("medicine_id")->references('id')->on('medicines');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('med_phar');
    }
};
