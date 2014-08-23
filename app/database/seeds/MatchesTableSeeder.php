<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Cdb\Match\Match;
use Cdb\Team\Team;
use Faker\Factory as Faker;

class MatchesTableSeeder extends Seeder {

	public function run()
	{
        $matches = [];

        $matches[] = [
            'home_team_id' => 2,
            'away_team_id' => 5,
            'home_team_score' => 2,
            'away_team_score' => 1,
            'tournament_id' => 1,
        ];

        foreach($matches as $match) {
            $this->createMatch($match);
        }
	}

    private function createMatch($match)
    {
        $hometeam = Team::find($match['home_team_id']);
        $awayteam = Team::find($match['away_team_id']);
        $match = array_merge($match, ['slug' => $hometeam->slug . '-vs-' . $awayteam->slug]);
        Match::create($match);
    }

}
