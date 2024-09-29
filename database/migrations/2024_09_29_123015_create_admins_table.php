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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id'); // Creates the 'id' field which is auto-incrementing
            $table->string('name'); // Admin's name
            $table->string('email')->unique(); // Admin's email, should be unique
            $table->string('password'); // Password, should be hashed
            $table->string('otp')->nullable(); // OTP can be nullable
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
