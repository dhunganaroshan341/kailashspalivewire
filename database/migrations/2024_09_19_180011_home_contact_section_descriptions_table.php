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
        //
        Schema::create('home_contact_section_descriptions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Title of the news article
            $table->longText('description'); // Main content of the news article
            $table->timestamps(); // Created at and Updated at timestamps
        }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists(table: 'home_contact_section_descriptions');
    }
};
