<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->boolean('gender')->comment('0 for male, 1 for female');
            $table->integer('country_id')->unsigned();
            $table->string('phone', 20 );
            $table->string('email')->unique();
            $table->string('address');
            $table->date('dob');
            $table->enum('contact_mode', ['phone', 'sms','email']);
            $table->string('image');

            $table->foreign('country_id')->references('id')->on('countries');

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
        Schema::drop('users');
    }
}
