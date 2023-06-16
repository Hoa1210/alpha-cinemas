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
        Schema::create('show_time', function (Blueprint $table) {
            $table->id();
            $table->date('date_start');
            $table->date('time_start'); 
            $table->foreignId('room_id')->constrained('rooms');
            $table->foreignId('movie_id')->constrained('movies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show_time');
    }
};