<?php

class BaseController extends Controller
{
    protected $layout = 'layouts.default';

    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => 'post', 'patch', 'delete']);

        $this->beforeFilter(function () {
            Event::fire('clockwork.controller.start');
        });

        $this->afterFilter(function () {
            Event::fire('clockwork.controller.end');
        });
    }

    /**
     * @param $path
     * @param array $data
     */
    protected function view($path, $data = [])
    {
        $this->layout->content = View::make($path, $data);
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

}
