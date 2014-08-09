<?php

class PlayerTeamRecord extends \Eloquent {
	protected $fillable = [];
    protected $table = 'playerteamrecords';

    public function player()
    {
        return $this->belongsTo('Player');
    }

    public function team()
    {
        return $this->belongsTo('Team');
    }

}