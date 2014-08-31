<?php namespace Cdb\Match;

use McCool\LaravelAutoPresenter\BasePresenter;

class MatchPresenter extends BasePresenter
{
    protected $teamIdentifiers = ['home', 'away'];

    public function __construct(Match $match)
    {
        $this->resource = $match;
    }

    public function result($teamId = null)
    {
        if ($teamId) {
            $teamIdentifiers = $this->getTeamIdentifiers($teamId);

            $firstTeamScoreField = $teamIdentifiers[0] . '_team_score';
            $secondTeamScoreField = $teamIdentifiers[1] . '_team_score';

            return ($this->resource->$firstTeamScoreField > $this->resource->$secondTeamScoreField) ? 'WIN' : 'LOSS';
        }

        return false;
    }

    public function name($teamId = null)
    {
        $teamIdentifiers = $this->getTeamIdentifiers($teamId);

        $firstTeamField = $teamIdentifiers[0] . 'Team';
        $secondTeamField = $teamIdentifiers[1] . 'Team';

        return $this->resource->$firstTeamField->name . ' vs ' . $this->resource->$secondTeamField->name;
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
            if ($this->resource->{$identifiers[0] . '_team_score'} < $this->resource->{$identifiers[1] . '_team_score'})
                $identifiers = array_reverse($identifiers);
        }

        return $identifiers;
    }
}