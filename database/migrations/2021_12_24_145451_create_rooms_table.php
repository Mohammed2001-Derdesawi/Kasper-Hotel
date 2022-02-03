<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('people');
            $table->integer('distance');
            $table->integer('floor');
            $table->integer('rating')->max('5');
            $table->integer('isclean')->default('1');
            $table->bigInteger('loadTime')->default('0');
            $table->double('room_price');

            $table->integer('roomType')->default('1');

            $table->longText('imageRoom');

            $table->unsignedInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
