<?php

use Cdb\Team\Organisation;

class OrganisationController extends BaseController
{
    /**
     * @var Organisation
     */
    private $organisation;

    /**
     * @param Organisation $organisation
     */
    function __construct(Organisation $organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * Display a listing of the resource.
     * GET /organisation
     *
     * @return Response
     */
    public function index()
    {
        $organisations = $this->organisation->all();
        $this->view('organisation.index', compact('organisations'));
    }

    /**
     * Display the specified resource.
     * GET /organisation/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $organisation = $this->organisation->findOrFail($id);
        $this->view('organisation.show', compact('organisation'));
    }
}