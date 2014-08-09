<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('name');
			$table->text('firstname');
            $table->text('lastname');
            $table->text('country');
            $table->integer('team_id');
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
		Schema::drop('players');
	}

}
