<?php namespace Cdb\Match;

use Eloquent;

class Map extends Eloquent
{
    protected $fillable = [];

    public function matches()
    {
        return $this->hasMany('Cdb\Match\Game');
    }
}