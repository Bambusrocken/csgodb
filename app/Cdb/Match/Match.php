<?php namespace Cdb\Match;

use Eloquent;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Match extends Eloquent implements PresenterInterface
{
    protected $fillable = [];

    protected $with = ['homeTeam', 'awayTeam'];

    public function homeTeam()
    {
        return $this->belongsTo('Cdb\Team\Team', 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo('Cdb\Team\Team', 'away_team_id');
    }

    public function tournament()
    {
        return $this->belongsTo('Cdb\Tournament\Tournament');
    }

    public function games()
    {
        return $this->hasMany('Cdb\Match\Game')->orderBy('number');
    }

    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }

    public function getPresenter()
    {
        return 'Cdb\Match\MatchPresenter';
    }
}