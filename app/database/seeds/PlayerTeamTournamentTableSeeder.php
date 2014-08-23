<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Cdb\Tournament\Tournament;
use Faker\Factory as Faker;

class PlayerTeamTournamentTableSeeder extends Seeder {

	public function run()
	{
        DB::table('player_team_tournament')->truncate();

        // NiP
        Tournament::find(1)->teamtournamentrecords->first()->players()->sync([6,7,8,9,10]);
        Tournament::find(2)->teamtournamentrecords->get(1)->players()->sync([6,7,8,9,10]);
        Tournament::find(3)->teamtournamentrecords->get(1)->players()->sync([6,7,8,9,10]);

        // fnatic
        Tournament::find(1)->teamtournamentrecords->get(1)->players()->sync([21,22,23,24,25]);
        //Tournament::find(2)->teamtournamentrecords->get(1)->players()->sync([6,7,8,9,10]);
        Tournament::find(3)->teamtournamentrecords->get(0)->players()->sync([21,22,23,31,32]);
	}

}
