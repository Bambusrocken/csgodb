<?php namespace Cdb\Core;

use McCool\LaravelAutoPresenter\BasePresenter as LaravelAutoBasePresenter;

class BasePresenter extends LaravelAutoBasePresenter
{
    protected function money($value)
    {
        setlocale(LC_MONETARY, 'en_US.UTF-8');

        return money_format('%.0n', $value);
    }
} 