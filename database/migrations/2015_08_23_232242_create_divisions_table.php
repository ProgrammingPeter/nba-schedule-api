<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::table('divisions', function(Blueprint $table) {
            $table->integer('conferenceId')->unsigned();
            $table->foreign('conferenceId')->references('id')->on('conferences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('divisions');
    }
}
