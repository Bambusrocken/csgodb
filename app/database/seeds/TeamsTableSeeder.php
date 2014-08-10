<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class TeamsTableSeeder extends Seeder {

	public function run()
	{
        Team::truncate();

        $teams =[];

        $teams[] =[
            'name' => 'Titan',
            'tag' => 'Titan',
            'country' => 'fr',
        ];

        $teams[] =[
            'name' => 'Ninjas in Pyjamas',
            'tag' => 'NiP',
            'country' => 'se',
        ];

        $teams[] =[
            'name' => 'Natus Vincere',
            'tag' => 'Na\'Vi',
            'country' => 'ua',
        ];

        $teams[] =[
            'name' => 'mousesports',
            'tag' => 'mouz',
            'country' => 'de',
        ];

        $teams[] =[
            'name' => 'fnatic',
            'tag' => 'fnatic',
            'country' => 'se',
        ];

        $teams[] =[
            'name' => 'Team Dignitas',
            'tag' => 'dignitas',
            'country' => 'dk',
        ];

        $teams[] =[
            'name' => 'London Conspiracy',
            'tag' => 'LC',
            'country' => 'no',
        ];

        foreach($teams as $team) {
            $this->createTeam($team);
        }
	}

    private function createTeam($team)
    {
        $team = array_merge($team, ['slug' => Str::slug($team['name'])]);
        Team::create($team);
    }

}
