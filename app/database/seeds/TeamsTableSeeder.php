<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class TeamsTableSeeder extends Seeder {

	public function run()
	{
        Team::truncate();

        Team::create([
            'name' => 'Titan',
            'tag' => 'Titan',
            'country' => 'fr',
        ]);

        Team::create([
            'name' => 'Ninjas in Pyjamas',
            'tag' => 'NiP',
            'country' => 'se',
        ]);

        Team::create([
            'name' => 'Natus Vincere',
            'tag' => 'Na\'Vi',
            'country' => 'ua',
        ]);

        Team::create([
            'name' => 'mousesports',
            'tag' => 'mouz',
            'country' => 'de',
        ]);

        Team::create([
            'name' => 'Team Dignitas',
            'tag' => 'dignitas',
            'country' => 'dk',
        ]);

        Team::create([
            'name' => 'fnatic',
            'tag' => 'fnatic',
            'country' => 'se',
        ]);

        Team::create([
            'name' => 'London Conspiracy',
            'tag' => 'LC',
            'country' => 'no',
        ]);
	}

}
