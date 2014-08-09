<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Carbon\Carbon;
use Faker\Factory as Faker;

class PlayerteamrecordsTableSeeder extends Seeder {

	public function run()
	{
        Playerteamrecord::truncate();

        Playerteamrecord::create([
            'player_id' => 8,
            'team_id' => 1,
            'start_date' => Carbon::createFromDate(2009,4,29),
            'end_date' => Carbon::createFromDate(2010,7,11),
        ]);

        Playerteamrecord::create([
            'player_id' => 8,
            'team_id' => 6,
            'start_date' => Carbon::createFromDate(2010,7,11),
            'end_date' => Carbon::createFromDate(2012,2,1),
        ]);

        Playerteamrecord::create([
            'player_id' => 12,
            'team_id' => 1,
            'start_date' => Carbon::createFromDate(2011,2,21),
            'end_date' => Carbon::createFromDate(2011,7,19),
        ]);
	}

}
