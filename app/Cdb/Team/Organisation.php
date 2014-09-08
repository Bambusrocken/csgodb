<?php namespace Cdb\Team;

use Eloquent;

class Organisation extends Eloquent
{
    protected $fillable = [];

    public function teams()
    {
        return $this->belongsToMany('Cdb\Team\Team');
    }
}