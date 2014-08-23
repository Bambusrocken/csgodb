<?php namespace Cdb\Team;

use McCool\LaravelAutoPresenter\BasePresenter;

class TeamPresenter extends BasePresenter {

    public function __construct(Team $team)
    {
        $this->resource = $team;
    }

    public function name()
    {
        $name = $this->resource->name;

        if (substr($this->resource->name, -6) == ', Team') {
            $name = 'Team ' . substr($name, 0, -6);
        }

        return $name;
    }

} 