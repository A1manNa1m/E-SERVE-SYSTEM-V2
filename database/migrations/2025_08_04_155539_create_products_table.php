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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //creates the column.
            $table->foreign('user_id')->references('id')->on('users'); //enforces the relationship between tables.
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->string('price');
            $table->string('quantity');
            $table->string('quality');
            $table->string('contact');
            $table->string('extraInfo');
            $table->string('status');
            $table->string('organizer');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
