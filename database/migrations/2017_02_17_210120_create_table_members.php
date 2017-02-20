<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NatID');
            $table->string('Fname');
            $table->string('Lname');
            $table->integer('age');
            $table->string('email');
            $table->string('pic');
            $table->string('mobile');
            $table->string('gender');
            $table->string('university');
            $table->string('major');
            $table->string('accesslevel');
            $table->integer('DirID');
            $table->integer('SupervisorID');
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
        Schema::dropIfExists('members');
    }
}
