<?php namespace Cdb\TeamTournament;

use Cdb\Tournament\Tournament;
use McCool\LaravelAutoPresenter\BasePresenter;
use Request;

class TeamTournamentPresenter extends BasePresenter {

    public function __construct(TeamTournament $teamtournament)
    {
        $this->resource = $teamtournament;
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
} 