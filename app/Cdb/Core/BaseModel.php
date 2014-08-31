<?php namespace Cdb\Core;

use Eloquent;

class BaseModel extends Eloquent
{
    /*public function newPivot(Model $parent, array $attributes, $table, $exists)
    {
        if ($parent instanceof Team || $parent instanceof Tournament) {
            return new TeamTournament($parent, $attributes, $table, $exists);
        }

        return parent::newPivot($parent, $attributes, $table, $exists);
    }*/
} 