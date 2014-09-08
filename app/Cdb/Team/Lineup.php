<?php namespace Cdb\Team;

use Eloquent;

class Lineup extends Eloquent
{
    protected $fillable = [];

    public function team()
    {
        return $this->belongsTo('Cdb\Team\Teams');
    }

    public function players()
    {
        return $this->belongsToMany('Cdb\Player\Player')->orderBy('name');
    }

    public function getDates()
    {
        return array('start_date', 'end_date');
    }
}