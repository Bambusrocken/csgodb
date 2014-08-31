<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatchgamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matchgames', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('match_id');
            $table->integer('map_id');
            $table->integer('home_team_score');
            $table->integer('away_team_score');
            $table->integer('number');
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
		Schema::drop('matchgames');
	}

}
