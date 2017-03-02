<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nat_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('email');
            $table->integer('mobile');
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
        Schema::dropIfExists('participant_forms');
    }
}
