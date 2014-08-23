<?php

use Cdb\Tournament\Tournament;

class TournamentController extends \BaseController {

    /**
     * @var
     */
    protected $tournament;

    /**
     * Constructor
     *
     * @param Tournament $tournament
     */
    function __construct(Tournament $tournament)
    {
        $this->tournament = $tournament;
    }

	/**
	 * Display a listing of the resource.
	 * GET /tournament
	 *
	 * @return Response
	 */
	public function index()
	{
		$tournaments = $this->tournament->orderBy('start_date', 'desc')->get();
        $this->view('tournament.index', compact('tournaments'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tournament/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tournament
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /tournament/{id}
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$tournament = $this->tournament->findBySlug($slug);
        $this->view('tournament.show', compact('tournament'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tournament/{id}/edit
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
	 * PUT /tournament/{id}
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
	 * DELETE /tournament/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}