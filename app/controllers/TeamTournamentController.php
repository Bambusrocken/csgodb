<?php

use Cdb\Match\Match;
use Cdb\Match\MatchCenter;
use Cdb\Team\Team;
use Cdb\TeamTournament\TeamTournament;
use Cdb\Tournament\Tournament;

class TeamTournamentController extends BaseController
{
    /**
     * @var
     */
    protected $teamTournament;

    /**
     * @var Tournament
     */
    private $tournament;

    /**
     * @var Team
     */
    private $team;

    /**
     * @var Match
     */
    private $match;

    /**
     * @var MatchCenter
     */
    private $matchCenter;

    /**
     * Constructor
     *
     * @param TeamTournament $teamTournament
     */
    public function __construct(Tournament $tournament, Team $team, TeamTournament $teamTournament, Match $match, MatchCenter $matchCenter)
    {
        $this->tournament = $tournament;
        $this->team = $team;
        $this->$teamTournament = $teamTournament;
        $this->match = $match;
        $this->matchCenter = $matchCenter;
    }

    /**
     * Show
     *
     * @param $tournamentSlug
     * @param $teamSlug
     */
    public function show($tournamentSlug, $teamSlug)
    {
        $tournament = $this->tournament->findBySlug($tournamentSlug);
        $team = $this->team->findBySlug($teamSlug);
        $teamTournament = $this->teamTournament->where('team_id', $team->id)->where('tournament_id', $tournament->id)->first();
        $matches = $this->match->whereRaw('tournament_id = ? AND (home_team_id = ? OR away_team_id = ?)', [$tournament->id, $team->id, $team->id])->get();

        $this->matchCenter->setMatches($matches);
        $matchStats = $this->matchCenter->matchStats($team->id);
        $gameStats = $this->matchCenter->gameStats($team->id);
        $mapStats = $this->matchCenter->teamMapStats($team->id);

        $this->view('teamtournament.show', compact('tournament', 'team', 'teamTournament', 'matches', 'matchStats', 'gameStats', 'mapStats'));
    }
}