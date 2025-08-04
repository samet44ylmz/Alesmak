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
        Schema::table('contacts', function (Blueprint $table) {
            $table->json('title')->nullable()->change();
            $table->json('description')->nullable()->change();
            $table->json('adres_title')->nullable()->change();
            $table->json('adres_description')->nullable()->change();
            $table->json('phone_title')->nullable()->change();
            $table->json('phone_description')->nullable()->change();
            $table->json('hour_title')->nullable()->change();
            $table->json('hour_description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
