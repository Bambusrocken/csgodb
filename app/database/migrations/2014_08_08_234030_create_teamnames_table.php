<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamnamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teamnames', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('name');
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
		Schema::drop('teamnames');
	}

}
