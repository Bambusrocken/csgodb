<?php

class Player extends \Eloquent {
	protected $fillable = [];

    public function team()
    {
        return $this->belongsTo('Team');
    }

    public function playerteamrecords()
    {
        return $this->hasMany('Playerteamrecord');
    }

    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }

    public static function search($q) {
        $searchTerms = explode(' ', $q);

        $instance = new static;
        $query = $instance->newQuery();

        foreach($searchTerms as $term)
        {
            $query->where('name', 'LIKE', '%'. $term .'%')->orWhere('firstname', 'like', '%' . $term . '%')->orWhere('lastname', 'like', '%' . $term . '%');
        }

        return $query->get();
    }
}