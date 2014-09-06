<?php namespace Cdb\Team;

use Cdb\Core\BaseModel;

class TeamName extends BaseModel
{
    protected $table = 'teamnames';
    protected $fillable = [];

    public function team()
    {
        return $this->belongsTo('Cdb\Team\Team');
    }
}