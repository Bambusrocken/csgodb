<?php

class Team extends \Eloquent {
	protected $fillable = [];

    public function players()
    {
        return $this->hasMany('Player');
    }

    public function playerteamrecords()
    {
        return $this->hasMany('Playerteamrecord');
    }

    public function teamnames()
    {
        return $this->hasMany('Teamname');
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
            $query->where('name', 'LIKE', '%'. $term .'%')->orWhere('tag', 'like', '%' . $term . '%');
        }

        return $query->get();
    }
}