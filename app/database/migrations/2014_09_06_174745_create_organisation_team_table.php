<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganisationTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organisation_team', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('organisation_id')->unsigned()->index();
			$table->foreign('organisation_id')->references('id')->on('organisations')->onDelete('cascade');
			$table->integer('team_id')->unsigned()->index();
			$table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
		Schema::drop('organisation_team');
	}

}
