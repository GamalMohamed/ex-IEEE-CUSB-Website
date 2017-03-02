<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('workshop_id');
            $table->integer('interviewer_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('email');
            $table->bigInteger('mobile');
            $table->string('gender');
            $table->string('university');
            $table->string('major');

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
        Schema::dropIfExists('participants');
    }
}
