<?php namespace Cdb\Tournament;

use Cdb\Core\BaseModel;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Tournament extends BaseModel implements PresenterInterface
{
    protected $fillable = [];

    public function teamtournamentrecords()
    {
        return $this->hasMany('Cdb\Tournament\TeamTournament')->orderBy('place');
    }

    public function matches()
    {
        return $this->hasMany('Cdb\Match\Match');
    }

    public function teams()
    {
        $teams = [];
        foreach ($this->teamtournamentrecords as $teamtournamentrecord) {
            $teams[] = $teamtournamentrecord->team;
        }
        return $teams;
    }

    public function players()
    {
        $players = [];
        foreach ($this->teamtournamentrecords as $teamtournamentrecord) {
            foreach ($teamtournamentrecord->players as $player) {
                $players[] = $player;
            }
        }
        return $players;
    }

    public static function findBySlug($slug)
    {
        return static::with('teamtournamentrecords', 'teamtournamentrecords.team')->where('slug', $slug)->first();
    }

    public function getDates()
    {
        return array('start_date', 'end_date');
    }

    public function getPresenter()
    {
        return 'Cdb\Tournament\TournamentPresenter';
    }
}