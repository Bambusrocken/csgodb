<?php namespace Cdb\Team;

use Cdb\Core\BaseModel;
use Illuminate\Support\Collection;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Team extends BaseModel implements PresenterInterface
{
    protected $fillable = [];

    public function organisations()
    {
        return $this->belongsToMany('Cdb\Team\Organisation');
    }

    public function lineups()
    {
        return $this->hasMany('Cdb\Team\Lineup')->orderBy('start_date', 'desc');
    }

    public function players()
    {
        $players = new Collection();

        foreach($this->lineups as $lineup) {
            foreach($lineup->players as $player)
            {
                if (!$players->has($player->id)) {
                    $players->put($player->id, $player);
                }
            }
        }

        return $players;
    }

    public function getPresenter()
    {
        return 'Cdb\Team\TeamPresenter';
    }
}