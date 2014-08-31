<?php namespace Cdb\Match;

use McCool\LaravelAutoPresenter\BasePresenter;

class GamePresenter extends BasePresenter
{
    protected $teamIdentifiers = ['home', 'away'];

    public function __construct(Game $game)
    {
        $this->resource = $game;
    }

    public function number()
    {
        return $this->resource->number + 1;
    }

    public function score($teamId = null)
    {
        $teamIdentifiers = $this->getTeamIdentifiers($teamId);;

        $firstTeamScoreField = $teamIdentifiers[0] . '_team_score';
        $secondTeamScoreField = $teamIdentifiers[1] . '_team_score';

        return $this->resource->$firstTeamScoreField . ' - ' . $this->resource->$secondTeamScoreField;
    }

    private function getTeamIdentifiers($teamId)
    {
        $identifiers = ['home', 'away'];

        if ($teamId) {
            if ($this->resource->away_team_id == $teamId)
                $identifiers = array_reverse($identifiers);
        } else {
            if ($this->resource->match->{$identifiers[0] . '_team_score'} < $this->resource->match->{$identifiers[1] . '_team_score'})
                $identifiers = array_reverse($identifiers);
        }

        return $identifiers;
    }
}