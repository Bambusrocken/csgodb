<?php

class Teamname extends \Eloquent {
	protected $fillable = [];

    public function team()
    {
        return $this->belongsTo('Team');
    }
}