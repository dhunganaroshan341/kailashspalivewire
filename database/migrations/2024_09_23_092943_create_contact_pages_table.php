<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPagesTable extends Migration
{
    public function up()
    {
        Schema::create('contact_pages', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->json('contacts')->nullable(); // Field to store multiple contacts as JSON
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_pages');
    }
}
