<?php namespace Cdb\Match;


use McCool\LaravelAutoPresenter\BasePresenter;

class MatchPresenter extends BasePresenter {

    public function __construct(Match $match)
    {
        $this->resource = $match;
    }

    public function name()
    {
        return $this->resource->hometeam->name . ' vs ' . $this->resource->awayteam->name;
    }
} 