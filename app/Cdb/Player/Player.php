<?php namespace Cdb\Player;

use Cdb\Core\BaseModel;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Player extends BaseModel implements PresenterInterface
{
    protected $fillable = [];

    protected $with = ['team'];

    public function lineups()
    {
        return $this->belongsToMany('Cdb\Team\Lineup');
    }

    public function team()
    {
        return $this->belongsTo('Cdb\Team\Team');
    }

    public function teamTournamentRecords()
    {
        return $this->belongsToMany('Cdb\Tournament\TeamTournament', 'player_team_tournament', 'player_id', 'team_tournament_id');
    }

    public function playerTeamRecords()
    {
        return $this->hasMany('Cdb\Player\PlayerTeamRecord');
    }

    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }

    public static function search($q)
    {
        $searchTerms = explode(' ', $q);

        $instance = new static;
        $query = $instance->newQuery();

        foreach ($searchTerms as $term) {
            $query->where('name', 'LIKE', '%' . $term . '%')->orWhere('firstname', 'like', '%' . $term . '%')->orWhere('lastname', 'like', '%' . $term . '%');
        }

        return $query->get();
    }

    public function getPresenter()
    {
        return 'Cdb\Player\PlayerPresenter';
    }
}