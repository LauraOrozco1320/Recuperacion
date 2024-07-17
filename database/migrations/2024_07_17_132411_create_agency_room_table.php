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
        Schema::create('agency_room', function (Blueprint $table) {
            $table->id();
             //atributo foraneo agency
             $table->foreignId('agency_id')->references('id')->on('agencies');
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
        Schema::dropIfExists('agency_room');
    }
};
