<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLineupPlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lineup_player', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('lineup_id')->unsigned()->index();
			$table->foreign('lineup_id')->references('id')->on('lineups')->onDelete('cascade');
			$table->integer('player_id')->unsigned()->index();
			$table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
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
		Schema::drop('lineup_player');
	}

}
