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
        Schema::create('footer_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Footer Title
            $table->text('description'); // Footer Description
            $table->string('facebook')->nullable(); // Facebook link
            $table->string('instagram')->nullable(); // Instagram link
            $table->string('twitter')->nullable(); // Twitter link
            $table->string('youtube')->nullable(); // YouTube link
            $table->json('phone_numbers'); // Store phone numbers as JSON
            $table->string('email'); // Footer Email
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_settings');
    }
};
