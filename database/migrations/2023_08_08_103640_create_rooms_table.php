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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('images');
            $table->string('room_type');
            $table->number('room_number');
            $table->string('amenities');
            $table->number('price');
            $table->number('discount');
            $table->string('offer');
            $table->number('offer_price');
            $table->string('description');
            $table->string('cancellation');
            $table->enum('status',['Avaliable', 'Booked']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
