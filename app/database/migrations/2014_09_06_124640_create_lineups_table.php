<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLineupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id')->unsigned()->index();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
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
        Schema::drop('lineups');
    }
}
