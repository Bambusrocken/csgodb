<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Carbon\Carbon;
use Cdb\Team\Teamname;
use Faker\Factory as Faker;

class TeamnamesTableSeeder extends Seeder {

	public function run()
	{
        Teamname::truncate();

        Teamname::create([
            'name' => 'Team Verygames',
            'team_id' => 1,
            'start_date' => Carbon::createFromDate(2009,1,1),
            'end_date' => Carbon::createFromDate(2014,1,7),
        ]);
	}

}
