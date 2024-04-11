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
        Schema::table('reservations', function (Blueprint $table) {
            $table->integer('total_adults');
            $table->integer('total_children');
            $table->string('ref');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('total_adults');
            $table->dropColumn('total_children');
            $table->dropColumn('ref');
        });
    }
};
