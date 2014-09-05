<?php namespace Cdb\Team;

use Cdb\Core\BaseModel;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Team extends BaseModel implements PresenterInterface
{
    protected $fillable = [];

    public function players()
    {
        return $this->hasMany('Cdb\Player\Player');
    }

    public function playerTeamRecords()
    {
        return $this->hasMany('Cdb\Player\PlayerTeamRecord');
    }

    public function teamTournamentRecords()
    {
        return $this->hasMany('Cdb\Tournament\TeamTournament');
    }

    public function tournaments()
    {
        $tournaments = [];
        foreach ($this->teamTournamentRecords as $teamTournamentRecord) {
            $tournaments[] = $teamTournamentRecord->tournament;
        }

        return $tournaments;
    }

    public function teamNames()
    {
        return $this->hasMany('Cdb\Team\TeamName');
    }

    public static function findBySlug($slug)
    {
        return static::with('teamTournamentRecords', 'teamTournamentRecords.tournament')->where('slug', $slug)->first();
    }

    public static function search($q)
    {
        $searchTerms = explode(' ', $q);

        $instance = new static;
        $query = $instance->newQuery();

        foreach ($searchTerms as $term) {
            $query->where('name', 'LIKE', '%' . $term . '%')->orWhere('tag', 'like', '%' . $term . '%');
        }

        return $query->get();
    }

    public function getPresenter()
    {
        return 'Cdb\Team\TeamPresenter';
    }
}