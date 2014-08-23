<?php namespace Cdb\Tournament;

use McCool\LaravelAutoPresenter\BasePresenter;
use NumberFormatter;
use Cdb\Tournament\Tournament;

class TournamentPresenter extends BasePresenter {

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
        setlocale(LC_MONETARY, 'en_US.UTF-8');
        return money_format('%.0n', $this->resource->pricepool);
    }
}