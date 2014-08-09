<?php

class Player extends \Eloquent {
	protected $fillable = [];

    public function team()
    {
        return $this->belongsTo('Team');
    }

    public function playerteamrecords()
    {
        return $this->hasMany('Playerteamrecord');
    }
}