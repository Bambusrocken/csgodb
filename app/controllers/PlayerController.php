<?php

class PlayerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /player
	 *
	 * @return Response
	 */
	public function index($char = null)
	{
        $chars = [];

        $players = Player::lists('name');
        foreach($players as $player) {
            $chars[] = strtolower(substr($player, 0, 1));
        }

        $chars = array_unique($chars);
        sort($chars);

        if($char) {
            $players = Player::where('name', 'like', $char . '%')->paginate(10);
        } else {
            $players = Player::orderBy('name')->paginate(10);
        }

        $this->view('player.index', compact('players', 'chars'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /player/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /player
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /player/{id}
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$player = Player::findBySlug($slug);
        $this->view('player.show', compact('player'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /player/{id}/edit
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
	 * PUT /player/{id}
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
	 * DELETE /player/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}