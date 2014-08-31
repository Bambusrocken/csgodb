<?php

use Cdb\Match\Match;
use Cdb\Team\Team;

class TeamController extends BaseController
{
    /**
     * @var
     */
    protected $team;
    /**
     * @var Match
     */
    private $match;

    /**
     * Constructor
     *
     * @param Team $team
     */
    public function __construct(Team $team, Match $match)
    {
        $this->team = $team;
        $this->match = $match;
    }

    /**
     * Index
     */
    public function index()
    {
        $teams = $this->team->orderBy('name')->paginate(10);
        $this->view('team.index', compact('teams'));
    }

    /**
     * Show
     *
     * @param $slug
     */
    public function show($slug)
    {
        $team = $this->team->findBySlug($slug);
        $matches = $this->match->where('home_team_id', $team->id)->orWhere('away_team_id', $team->id)->get();
        $totalPriceMoney = 200000;

        $this->view('team.show', compact('team', 'matches', 'totalPriceMoney'));
    }
}