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
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Title of the news article
            $table->longText('content'); // Main content of the news article
            $table->string('slug')->unique(); // SEO-friendly URL slug
            $table->string('cover_photo_path')->nullable(); // Path to the cover photo
            $table->timestamp('published_at')->nullable(); // Publish date and time
            $table->boolean('is_published')->default(false); // Whether the news is published or not
            $table->string('author')->nullable(); // Author of the news article
            $table->string('meta_title')->nullable(); // SEO meta title
            $table->text('meta_description')->nullable(); // SEO meta description
            $table->string('meta_keywords')->nullable(); // SEO meta keywords
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
