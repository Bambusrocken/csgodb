<?php

use Cdb\Match\Match;
use Cdb\Team\Team;

class MatchesTableSeeder extends Seeder
{
    protected $matches;

    public function run()
    {
        Match::truncate();

        // ESL Cologne 2014: NiP vs fnatic
        $this->addMatch(2, 5, 2, 1, 1, 3);

        // ESL Cologne 2014: NiP vs LDLC
        $this->addMatch(2, 14, 2, 1, 1, 3);

        // ESL Cologne 2014: fnatic vs dignitas
        $this->addMatch(5, 6, 2, 0, 1, 3);

        // ESL Cologne 2014: NiP vs C9
        $this->addMatch(2, 8, 2, 1, 1, 3);

        // ESL Cologne 2014: LDLC vs VP
        $this->addMatch(14, 15, 2, 0, 1, 3);

        // ESL Cologne 2014: dignitas vs Epsilon
        $this->addMatch(6, 11, 2, 0, 1, 3);

        // ESL Cologne 2014: fnatic vs NaVi
        $this->addMatch(5, 3, 2, 1, 1, 3);

        // ESL Cologne 2014: dignitas vs titan
        $this->addMatch(6, 1, 16, 1, 1);

        // ESL Cologne 2014: dignitas vs C9
        $this->addMatch(6, 8, 14, 16, 1);

        // ESL Cologne 2014: NiP vs NaVi
        $this->addMatch(2, 3, 16, 11, 1);

        // ESL Cologne 2014: NiP vs Epsilon
        $this->addMatch(2, 11, 6, 16, 1);

        // ESL Cologne 2014: NiP vs Wolf
        $this->addMatch(2, 17, 16, 7, 1);

        $this->createMatches();
    }

    private function addMatch($homeTeamId, $awayTeamId, $homeTeamScore, $awayTeamScore, $tournamentId, $bestOf = 1)
    {
        $match = [
            'home_team_id' => $homeTeamId,
            'away_team_id' => $awayTeamId,
            'home_team_score' => $homeTeamScore,
            'away_team_score' => $awayTeamScore,
            'tournament_id' => $tournamentId,
            'best_of' => $bestOf,
        ];

        $this->matches[] = $this->prepareMatch($match);
    }

    private function prepareMatch($match)
    {
        $homeTeam = Team::find($match['home_team_id']);
        $awayTeam = Team::find($match['away_team_id']);

        $match = array_merge($match, ['slug' => $homeTeam->slug . '-vs-' . $awayTeam->slug]);

        return $match;
    }

    private function createMatches()
    {
        foreach ($this->matches as $match) {
            Match::create($match);
        }
    }

}
