<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nat_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('email');
            $table->string('picture');
            $table->string('mobile');
            $table->string('gender');
            $table->string('university');
            $table->string('major');
            $table->integer('dir_id');
            $table->integer('supervisor_id');
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
