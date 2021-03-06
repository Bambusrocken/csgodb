<?php namespace Cdb\Tournament;

use Cdb\Core\BasePresenter;

class TeamTournamentPresenter extends BasePresenter
{
    public function __construct(TeamTournament $teamTournament)
    {
        $this->resource = $teamTournament;
    }

    public function place()
    {
        $place = $this->resource->place;
        $tournament = Tournament::findOrFail($this->resource->tournament_id);
        $placings = TeamTournament::where('tournament_id', $tournament->id)->lists('place');
        sort($placings);
        $placings = array_count_values($placings);

        if ($placings[$place] != 1) {
            $place = ($place - $placings[$place] + 1) . '-' . $place;
        }

        return $place;
    }

    public function price()
    {
        return $this->money($this->resource->price);
    }
} 