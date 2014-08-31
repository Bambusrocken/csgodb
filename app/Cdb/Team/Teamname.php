<?php namespace Cdb\Team;

use Cdb\Core\BaseModel;

class Teamname extends BaseModel
{
    protected $fillable = [];

    public function team()
    {
        return $this->belongsTo('Cdb\Team\Team');
    }
}