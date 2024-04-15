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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('checkIn');
            $table->date('checkOut');
            $table->enum('statut', ['Confirmed', 'Due In', 'Checked In', 'Due Out', 'Checked Out', 'Pending', 'Rejected'])->default('Pending');
            $table->integer('total_adults');
            $table->integer('total_children');
            $table->string('ref');

            $table->foreignId('room_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
