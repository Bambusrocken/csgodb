<?php

use Cdb\Tournament\TeamTournament;

class TeamTournamentTableSeeder extends Seeder {

	public function run()
	{
        DB::statement("SET foreign_key_checks = 0");

        TeamTournament::truncate();

        // ESL One Cologne 2014
        TeamTournament::create(['team_id' => 1, 'tournament_id' => 1, 'place' => 12, 'price' => 2000]);
        TeamTournament::create(['team_id' => 2, 'tournament_id' => 1, 'place' => 1, 'price' => 100000]);
        TeamTournament::create(['team_id' => 3, 'tournament_id' => 1, 'place' => 8, 'price' => 10000]);
        TeamTournament::create(['team_id' => 5, 'tournament_id' => 1, 'place' => 2, 'price' => 50000]);
        TeamTournament::create(['team_id' => 6, 'tournament_id' => 1, 'place' => 4, 'price' => 22000]);
        TeamTournament::create(['team_id' => 7, 'tournament_id' => 1, 'place' => 12, 'price' => 2000]);
        TeamTournament::create(['team_id' => 8, 'tournament_id' => 1, 'place' => 8, 'price' => 10000]);
        TeamTournament::create(['team_id' => 9, 'tournament_id' => 1, 'place' => 12, 'price' => 2000]);
        TeamTournament::create(['team_id' => 10, 'tournament_id' => 1, 'place' => 16, 'price' => 2000]);
        TeamTournament::create(['team_id' => 11, 'tournament_id' => 1, 'place' => 8, 'price' => 10000]);
        TeamTournament::create(['team_id' => 12, 'tournament_id' => 1, 'place' => 16, 'price' => 2000]);
        TeamTournament::create(['team_id' => 13, 'tournament_id' => 1, 'place' => 12, 'price' => 2000]);
        TeamTournament::create(['team_id' => 14, 'tournament_id' => 1, 'place' => 4, 'price' => 22000]);
        TeamTournament::create(['team_id' => 15, 'tournament_id' => 1, 'place' => 8, 'price' => 10000]);
        TeamTournament::create(['team_id' => 16, 'tournament_id' => 1, 'place' => 16, 'price' => 2000]);
        TeamTournament::create(['team_id' => 17, 'tournament_id' => 1, 'place' => 16, 'price' => 2000]);

        // EMS One Katowice 2014
        TeamTournament::create(['team_id' => 2, 'tournament_id' => 2, 'place' => 2, 'price' => 50000]);
        TeamTournament::create(['team_id' => 15, 'tournament_id' => 2, 'place' => 1, 'price' => 100000]);

        // Dreamhack winter 2013
        TeamTournament::create(['team_id' => 2, 'tournament_id' => 3, 'place' => 2, 'price' => 50000]);
        TeamTournament::create(['team_id' => 5, 'tournament_id' => 3, 'place' => 1, 'price' => 100000]);

        DB::statement("SET foreign_key_checks = 1");
	}

}
