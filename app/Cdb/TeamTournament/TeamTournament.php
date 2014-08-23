<?php namespace Cdb\TeamTournament;

use Cdb\Core\BaseModel;
use McCool\LaravelAutoPresenter\PresenterInterface;

class TeamTournament extends BaseModel implements PresenterInterface {

	protected $fillable = [];
    protected $table = 'team_tournament';

    public function team()
    {
        return $this->belongsTo('Cdb\Team\Team');
    }

    public function tournament()
    {
        return $this->belongsTo('Cdb\Tournament\Tournament');
    }

    public function players()
    {
        return $this->belongsToMany('Cdb\Player\Player', 'player_team_tournament', 'team_tournament_id', 'player_id');
    }

    /**
     * Get the presenter class.
     *
     * @return string The class path to the presenter.
     */
    public function getPresenter()
    {
        return 'Cdb\TeamTournament\TeamTournamentPresenter';
    }
}