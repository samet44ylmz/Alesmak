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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
           
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('adres_title')->nullable();
            $table->text('adres_description')->nullable();
            $table->string('phone_title')->nullable();
            $table->text('phone_description')->nullable();
            $table->string('hour_title')->nullable();
            $table->text('hour_description')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();           
            $table->text('message')->nullable();
            $table->timestamps();
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
