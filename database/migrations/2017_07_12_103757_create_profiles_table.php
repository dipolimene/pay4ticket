<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('users_id');
            $table->string('organizer');
            $table->string('address');
            $table->string('public_email');
            $table->integer('private_number');
            $table->integer('public_number');
            $table->string('social_media');
            $table->integer('nuban');
            $table->string('bank_name');
            $table->string('beneficiary');
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
        Schema::dropIfExists('profiles');
    }
}
