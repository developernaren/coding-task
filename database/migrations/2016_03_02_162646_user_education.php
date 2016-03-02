<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserEducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_education', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->integer('education_id')->unsigned();

            $table->string('institution');
            $table->tinyInteger('passed_year');

            $table->foreign('user_id')->on('users')->references('id');
            $table->foreign('education_id')->on('education')->references('id');


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
        Schema::drop('user_education');
    }
}
