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
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('ride_id');
            $table->string('banner');
            $table->string('price');
            $table->integer('seat_total');
            $table->string('seat_available');
            $table->string('seat_arrangement');
            $table->string('year');
            $table->string('month');
            $table->string('day');
            $table->string('hour');
            $table->string('minuite');
            $table->string('second');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rides');
    }
};
