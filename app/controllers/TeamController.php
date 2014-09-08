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
     * @param Match $match
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
     * @param $id
     */
    public function show($id)
    {
        $team = $this->team->findOrFail($id);

        $this->view('team.show', compact('team'));
    }
}