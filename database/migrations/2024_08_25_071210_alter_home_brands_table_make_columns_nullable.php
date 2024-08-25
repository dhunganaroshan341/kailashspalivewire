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
        Schema::table('home_brands', function (Blueprint $table) {
            $table->string('logo_path')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
            $table->string('website')->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('home_brands', function (Blueprint $table) {
            $table->string('logo_path')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
            $table->string('website')->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
        });

    }
};
