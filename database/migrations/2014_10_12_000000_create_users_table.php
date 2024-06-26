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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('profile_picture');
            $table->string('email')->unique();
            $table->string('phoneNumber');
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', ['Association','Club','Admin'])->default('Association');
            $table->string('password');
            $table->boolean('banned');
            $table->boolean('archived');
            $table->boolean('confirmed');
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
