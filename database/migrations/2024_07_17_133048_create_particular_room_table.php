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
        Schema::create('particular_room', function (Blueprint $table) {
            $table->id();
             //atributo foraneo agency
             $table->foreignId('particular_id')->references('id')->on('particulars');
              //atributo foraneo room
            $table->foreignId('room_id')->references('id')->on('rooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('particular_room');
    }
};
