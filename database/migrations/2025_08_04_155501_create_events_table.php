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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //creates the column.
            $table->foreign('user_id')->references('id')->on('users'); //enforces the relationship between tables.
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->string('venue');
            $table->date('date');
            $table->time('timestart');
            $table->time('timeend');
            $table->string('fees');
            $table->string('contact');
            $table->string('registration');
            $table->string('organizer');
            $table->string('extraInfo');
            $table->string('status');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
