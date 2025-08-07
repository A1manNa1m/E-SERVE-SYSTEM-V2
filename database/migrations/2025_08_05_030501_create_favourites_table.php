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
        Schema::create('favourites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // correct column name
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('favouritable_id'); //when user click fav button, it will capture the id of item(event,announcement,service,product)
            $table->string('favouritable_type'); // this will capture the type of item (event,announcement,service,product)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favourites');
    }
};
