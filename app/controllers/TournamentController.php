<?php

use Cdb\Tournament\Tournament;

class TournamentController extends BaseController
{
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
     * Index
     */
    public function index()
    {
        $tournaments = $this->tournament->orderBy('start_date', 'desc')->get();
        $this->view('tournament.index', compact('tournaments'));
    }

    /**
     * Show
     *
     * @param $slug
     */
    public function show($slug)
    {
        $tournament = $this->tournament->findBySlug($slug);
        $this->view('tournament.show', compact('tournament'));
    }
}