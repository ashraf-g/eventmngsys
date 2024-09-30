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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id'); // Booking ID
            $table->unsignedBigInteger('user_id'); // User ID
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->unsignedBigInteger('event_id'); // Event ID
            $table->foreign('event_id')->references('event_id')->on('events');
            $table->integer('no_of_tickets'); // Number of tickets
            $table->decimal('total_price', 10, 2); // Total price
            $table->string('location'); // Location
            $table->enum('status', ['confirm', 'pending', 'cancel']); // Booking status
            $table->timestamps(); // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
