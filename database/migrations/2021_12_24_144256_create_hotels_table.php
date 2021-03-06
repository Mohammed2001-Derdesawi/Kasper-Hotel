<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('manager_id');
            $table->integer('numberoffloor');
            $table->integer('numberofroomsinonefloor');
            $table->longText('description');
            $table->integer('salaryAtNight');
            $table->integer('stars')->max('5');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('NO ACTION');


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
        Schema::dropIfExists('hotels');
    }
}
