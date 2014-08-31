<?php namespace Cdb\Tournament;

use Cdb\Core\BasePresenter;

class TournamentPresenter extends BasePresenter
{
    protected $standardFormat = 'd F Y';

    public function __construct(Tournament $tournament)
    {
        $this->resource = $tournament;
    }

    public function date()
    {
        return $this->resource->start_date->format('d') . ' - ' . $this->end_date();
    }

    public function start_date()
    {
        return $this->resource->start_date->format($this->standardFormat);
    }

    public function end_date()
    {
        return $this->resource->end_date->format($this->standardFormat);
    }

    public function pricepool()
    {
        return $this->money($this->resource->pricepool);
    }
}