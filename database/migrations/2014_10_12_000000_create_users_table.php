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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('image');
            $table->string('drive_licence')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('OTP')->nullable();
            $table->decimal('longitude', 10,8);
			$table->decimal('latitude', 10,8);
            $table->enum('role',['client','admin'])->default('client');
            $table->softDeletes();
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
