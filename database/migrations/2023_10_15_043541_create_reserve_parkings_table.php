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
        Schema::create('reserve_parkings', function (Blueprint $table) {
            $table->bigIncrements('ParID');
            $table->string('CarRegistration');
            $table->char('Paystatus',20);
            $table->unsignedTinyInteger('PayID');
            $table->foreign('PayID')->references('PayID')->on('payment_methods')->onDelete('cascade');
            $table->text('Img_payment')->nullable();   
            $table->dateTime('Time_in');
            $table->dateTime('Time_out');
            $table->unsignedBigInteger('ParkingID');
            $table->foreign('ParkingID')->references('ParkingID')->on('parkings')->onDelete('cascade');
            $table->unsignedInteger('Price');
            $table->unsignedInteger('PayTheFine')->nullable();
            $table->unsignedBigInteger('UserId');
            $table->foreign('UserId')->references('id')->on('users')->onDelete('cascade');      //Fk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserve_parkings');
    }
};
