<?php namespace Cdb\Tournament;

use Cdb\Core\BaseModel;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Tournament extends BaseModel implements PresenterInterface
{
    protected $fillable = [];

    public function teamTournamentRecords()
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
        foreach ($this->teamTournamentRecords as $teamTournamentRecord) {
            $teams[] = $teamTournamentRecord->team;
        }

        return $teams;
    }

    public function players()
    {
        $players = [];

        foreach ($this->teamTournamentRecords as $teamTournamentRecord) {
            foreach ($teamTournamentRecord->players as $player) {
                $players[] = $player;
            }
        }

        return $players;
    }

    public static function findBySlug($slug)
    {
        return static::with('teamTournamentRecords', 'teamTournamentRecords.team')->where('slug', $slug)->first();
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