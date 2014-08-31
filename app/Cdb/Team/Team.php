<?php namespace Cdb\Team;

use Cdb\Core\BaseModel;
use Cdb\Match\Match;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Team extends BaseModel implements PresenterInterface {
	protected $fillable = [];

    public function players()
    {
        return $this->hasMany('Cdb\Player\Player');
    }

    public function playerteamrecords()
    {
        return $this->hasMany('PlayerTeamRecord');
    }

    public function teamtournamentrecords()
    {
        return $this->hasMany('Cdb\Tournament\TeamTournament');
    }

    public function tournaments()
    {
        $tournaments = [];
        foreach($this->teamtournamentrecords as $teamtournamentrecord) {
            $tournaments[] = $teamtournamentrecord->tournament;
        }
        return $tournaments;
    }

    public function teamnames()
    {
        return $this->hasMany('Cdb\Team\Teamname');
    }

    public static function findBySlug($slug)
    {
        return static::with('teamtournamentrecords', 'teamtournamentrecords.tournament')->where('slug', $slug)->first();
    }

    public static function search($q) {
        $searchTerms = explode(' ', $q);

        $instance = new static;
        $query = $instance->newQuery();

        foreach($searchTerms as $term)
        {
            $query->where('name', 'LIKE', '%'. $term .'%')->orWhere('tag', 'like', '%' . $term . '%');
        }

        return $query->get();
    }

    public function getPresenter()
    {
        return 'Cdb\Team\TeamPresenter';
    }
}