<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organizer_id');
            $table->string('title');
            $table->string('description');
            $table->string('genre');
            $table->string('date');
            $table->string('time');
            $table->integer('price');
            $table->string('premium');
            $table->integer('identity');
            $table->string('location');
            $table->string('address');
            $table->string('flyer');
            $table->string('banner');
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
        Schema::dropIfExists('events');
    }
}
