<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function(Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->string('team_name');
        });

        Schema::table('teams', function(Blueprint $table) {
            $table->integer('divisionId')->unsigned();
            $table->foreign('divisionId')->references('id')->on('divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teams');
    }
}
