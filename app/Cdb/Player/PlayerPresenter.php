<?php namespace Cdb\Player;

use McCool\LaravelAutoPresenter\BasePresenter;

class PlayerPresenter extends BasePresenter
{
    public function __construct(Player $player)
    {
        $this->resource = $player;
    }

    public function fullName()
    {
        return $this->resource->firstname . ' ' . $this->resource->lastname;
    }
} 