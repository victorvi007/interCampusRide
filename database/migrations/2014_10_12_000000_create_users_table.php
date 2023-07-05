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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->uniqid();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('reg_number')->unique();
            $table->string('phone')->unique();
            $table->string('avater');
            $table->float('balance')->default(0.0);
            $table->string('address');
            $table->string('faculty');
            $table->string('department');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
