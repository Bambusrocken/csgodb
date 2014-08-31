<?php namespace Cdb\Match;

use Eloquent;
use McCool\LaravelAutoPresenter\PresenterInterface;

class Game extends Eloquent implements PresenterInterface
{
    protected $table = 'matchgames';
    protected $fillable = [];

    public function match()
    {
        return $this->belongsTo('Cdb\Match\Match');
    }

    public function map()
    {
        return $this->belongsTo('Cdb\Match\Map');
    }

    /**
     * Get the presenter class.
     *
     * @return string The class path to the presenter.
     */
    public function getPresenter()
    {
        return 'Cdb\Match\GamePresenter';
    }
}