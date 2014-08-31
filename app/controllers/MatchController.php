<?php

use Cdb\Match\Match;

class MatchController extends BaseController
{
    /**
     * @var
     */
    protected $match;

    /**
     * @param Match $match
     */
    public function __construct(Match $match)
    {
        $this->match = $match;
    }

    /**
     *
     */
    public function index()
    {
        $matches = $this->match->get();
        $this->view('match.index', compact('matches'));
    }

    /**
     * @param $slug
     */
    public function show($slug)
    {
        $match = $this->match->findBySlug($slug);
        $this->view('match.show', compact('match'));
    }

}