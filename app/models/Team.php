<?php

class Team extends \Eloquent {
	protected $fillable = [];

    public function players()
    {
        return $this->hasMany('Player');
    }

    public function playerteamrecords()
    {
        return $this->hasMany('Playerteamrecord');
    }

    public function teamnames()
    {
        return $this->hasMany('Teamname');
    }
}