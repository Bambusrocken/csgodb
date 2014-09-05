<?php

use Cdb\Core\BaseModel;

class PlayerTeamRecord extends BaseModel {
	protected $fillable = [];
    protected $table = 'playerteamrecords';

    public function player()
    {
        return $this->belongsTo('Cdb\Player\Player');
    }

    public function team()
    {
        return $this->belongsTo('Cdb\Team\Team');
    }
}