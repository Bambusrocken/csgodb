<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerteamrecordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('playerteamrecords', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('player_id');
            $table->integer('team_id');
            $table->date('start_date');
            $table->date('end_date');
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
		Schema::drop('playerteamrecords');
	}

}
