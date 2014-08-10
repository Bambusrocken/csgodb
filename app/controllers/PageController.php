<?php

class PageController extends BaseController {

    public function home()
    {
        $this->view('layouts.home');
    }

    public function search()
    {
        $this->view('layouts.search');
    }

}