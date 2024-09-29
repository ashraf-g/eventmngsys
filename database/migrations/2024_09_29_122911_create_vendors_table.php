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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id('vendor_id');
            $table->string('name'); // Vendor's name
            $table->string('email')->unique(); // Vendor's email, should be unique
            $table->string('phno')->nullable(); // Phone number, can be nullable
            $table->string('password')->nullable(); // Password
            $table->string('shop_name'); // Name of the shop
            $table->text('address'); // Address of the shop
            $table->string('otp')->nullable(); // OTP can be nullable
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamps
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vendors', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['id']);
        });

        Schema::dropIfExists('vendors');
    }
};
