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
        Schema::create('parkings', function (Blueprint $table) {
            $table->bigIncrements('ParkingID');
            $table->unsignedTinyInteger('TypeID');
            $table->foreign('TypeID')->references('TypeID')->on('types')->onDelete('cascade');  
           // $table->unsignedInteger('Price');
            $table->boolean('stetas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parkings');
    }
};
