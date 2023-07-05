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
            $table->string('info');
            $table->string('from');
            $table->string('to');
            $table->string('car_image');
            $table->string('car_plate_number');
            $table->integer('seat_total');
            $table->integer('seat_booked');
            $table->string('year');
            $table->string('month');
            $table->string('day');
            $table->string('countdown');
            $table->string('depature_hour');
            $table->string('depature_minuite');
            $table->string('depature_second');
            $table->string('depature_meridiem');
            $table->string('eta_hour');
            $table->string('eta_minuite');
            $table->string('eta_second');
            $table->string('eta_meridiem');
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
