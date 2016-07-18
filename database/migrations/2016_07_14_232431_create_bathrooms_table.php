<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBathroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bathrooms', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->double('rating');
            $table->double('cleanliness');
            $table->string('name');
            $table->integer('building_id')->unsigned();
            $table->foreign('building_id')->references('id')->on('buildings');
            $table->integer('stalls');
            $table->integer('urinals');
            $table->string('gender');
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
        Schema::drop('bathrooms');
    }
}
