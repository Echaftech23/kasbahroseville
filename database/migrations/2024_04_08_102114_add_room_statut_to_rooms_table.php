<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoomStatutToRoomsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->enum('room_statut', ['Booked', 'Available'])->default('Available');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn('room_statut');
        });
    }
}
