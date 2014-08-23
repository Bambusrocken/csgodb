<?php namespace Cdb\Match;

use Eloquent;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Match extends Eloquent implements PresenterInterface {
	protected $fillable = [];

    public function hometeam()
    {
        return $this->belongsTo('Cdb\Team\Team', 'home_team_id');
    }

    public function awayteam()
    {
        return $this->belongsTo('Cdb\Team\Team', 'away_team_id');
    }

    public function tournament()
    {
        return $this->belongsTo('Cdb\Tournament\Tournament');
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