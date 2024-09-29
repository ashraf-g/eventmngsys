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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id'); // Event ID
            $table->unsignedBigInteger('vendor_id'); // Vendor ID
            $table->foreign('vendor_id')->references('vendor_id')->on('vendors');
            $table->string('event_name'); // Event Name
            $table->text('description')->nullable(); // Description
            $table->integer('capacity'); // Capacity
            $table->decimal('price', 10, 2); // Price
            $table->timestamps(); // Created at and Updated at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};