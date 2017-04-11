<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->integer('committeeId')->nullable();
            $table->string('description');
            $table->string('tag');
            $table->integer('numberOfSeats');
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->integer('numberOfParticipants');
            $table->boolean('isSponsored');

            // $table->
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshops');
    }
}
