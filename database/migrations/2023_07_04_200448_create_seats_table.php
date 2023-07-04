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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->string('ride_id');
            $table->string('seat_1')->nullable();
            $table->string('seat_2')->nullable();
            $table->string('seat_3')->nullable();
            $table->string('seat_4')->nullable();
            $table->string('seat_5')->nullable();
            $table->string('seat_6')->nullable();
            $table->string('seat_7')->nullable();
            $table->string('seat_8')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
