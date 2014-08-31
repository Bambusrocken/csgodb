<?php

use Cdb\Match\Game;

class MatchgamesTableSeeder extends Seeder
{
    protected $games = [];

    public function run()
    {
        $games = [];

        Game::truncate();

        // ESL Cologne 2014: NiP vs fnatic
        $this->addGame(1, 8, 16, 11, 0);
        $this->addGame(1, 7, 8, 16, 1);
        $this->addGame(1, 3, 16, 13, 2);

        // ESL Cologne 2014: NiP vs LDLC
        $this->addGame(2, 3, 16, 10, 0);
        $this->addGame(2, 4, 6, 16, 1);
        $this->addGame(2, 8, 16, 14, 2);

        // ESL Cologne 2014: fnatic vs dignitas
        $this->addGame(3, 2, 16, 11, 0);
        $this->addGame(3, 9, 16, 14, 1);
        $this->addGame(3, 4, 0, 0, 2);

        // ESL Cologne 2014: NiP vs C9
        $this->addGame(4, 4, 8, 16, 0);
        $this->addGame(4, 2, 16, 14, 1);
        $this->addGame(4, 8, 16, 14, 2);

        // ESL Cologne 2014: LDLC vs VP
        $this->addGame(5, 2, 16, 14, 0);
        $this->addGame(5, 6, 16, 12, 1);
        $this->addGame(5, 4, 0, 0, 2);

        // ESL Cologne 2014: dignitas vs Epsilon
        $this->addGame(6, 2, 16, 9, 0);
        $this->addGame(6, 3, 16, 8, 1);
        $this->addGame(6, 9, 0, 0, 2);

        // ESL Cologne 2014: fnatic vs NaVi
        $this->addGame(7, 3, 16, 11, 0);
        $this->addGame(7, 2, 7, 16, 1);
        $this->addGame(7, 4, 16, 14, 2);

        // ESL Cologne 2014: dignitas vs titan
        $this->addGame(8, 4, 16, 1);

        // ESL Cologne 2014: Cloud9 vs dignitas
        $this->addGame(9, 6, 14, 16);

        // ESL Cologne 2014: NiP vs NaVi
        $this->addGame(10, 9, 16, 11);

        // ESL Cologne 2014: NiP vs Epsilon
        $this->addGame(11, 8, 6, 16);

        // ESL Cologne 2014: NiP vs Wolf
        $this->addGame(12, 2, 16, 7);

        $this->createGames();
    }

    private function addGame($matchId, $mapId, $homeTeamScore, $awayTeamScore, $number = 0)
    {
        $game = [
            'match_id' => $matchId,
            'map_id' => $mapId,
            'home_team_score' => $homeTeamScore,
            'away_team_score' => $awayTeamScore,
            'number' => $number,
        ];

        $this->games[] = $this->prepareGame($game);
    }

    private function prepareGame($game)
    {
        // Nothing to prepare
        return $game;
    }

    private function createGames()
    {
        foreach ($this->games as $game) {
            Game::create($game);
        }
    }
}
