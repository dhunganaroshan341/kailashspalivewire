<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the person or company providing the testimonial
            $table->string('position')->nullable(); // Optional: Title or position of the person
            $table->string('company')->nullable(); // Optional: Company or organization the person is associated with
            $table->text('testimonial'); // Main content of the testimonial
            $table->integer('rating')->nullable(); // Optional: Rating, e.g., stars out of 5
            $table->string('image_path')->nullable(); // Optional: Path to an image of the person or company logo
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
