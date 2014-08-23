<?php

use Cdb\Match\Match;
use Cdb\Team\Team;
use Cdb\TeamTournament\TeamTournament;
use Cdb\Tournament\Tournament;

class TeamTournamentController extends BaseController {

    /**
     * @var
     */
    protected $teamtournament;
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
     * Constructor
     *
     * @param TeamTournament $teamtournament
     */
    public function __construct(Tournament $tournament, Team $team, TeamTournament $teamtournament, Match $match)
    {
        $this->tournament = $tournament;
        $this->team = $team;
        $this->teamtournament = $teamtournament;
        $this->match = $match;
    }

	/**
	 * Display a listing of the resource.
	 * GET /teamtournament
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /teamtournament/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /teamtournament
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /teamtournament/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($tournamentSlug, $teamSlug)
	{
        $tournament = $this->tournament->findBySlug($tournamentSlug);
        $team = $this->team->findBySlug($teamSlug);
        $teamtournament = $this->teamtournament->where('team_id', $team->id)->where('tournament_id', $tournament->id)->first();
        $matches = $this->match->where('home_team_id', $team->id)->orWhere('away_team_id', $team->id)->where('tournament_id', $tournament->id)->get();

        $this->view('teamtournament.show', compact('tournament', 'team', 'teamtournament', 'matches'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /teamtournament/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /teamtournament/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /teamtournament/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}