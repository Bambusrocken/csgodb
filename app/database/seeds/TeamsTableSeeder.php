<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Cdb\Team\Team;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class TeamsTableSeeder extends Seeder {

	public function run()
	{
        DB::statement("SET foreign_key_checks = 0");

        Team::truncate();

        $teams =[];

        $teams[] = [
            'name' => 'Titan',
            'tag' => 'Titan',
            'country' => 'fr',
        ];

        $teams[] = [
            'name' => 'Ninjas in Pyjamas',
            'tag' => 'NiP',
            'country' => 'se',
        ];

        $teams[] = [
            'name' => 'Natus Vincere',
            'tag' => 'Na\'Vi',
            'country' => 'ua',
        ];

        $teams[] = [
            'name' => 'mousesports',
            'tag' => 'mouz',
            'country' => 'de',
        ];

        $teams[] = [
            'name' => 'fnatic',
            'tag' => 'fnatic',
            'country' => 'se',
        ];

        $teams[] = [
            'name' => 'Dignitas, Team',
            'tag' => 'dignitas',
            'country' => 'dk',
        ];

        $teams[] = [
            'name' => 'London Conspiracy',
            'tag' => 'LC',
            'country' => 'no',
        ];

        $teams[] = [
            'name' => 'Cloud9',
            'tag' => 'C9',
            'country' => 'us',
        ];

        $teams[] = [
            'name' => 'iBUYPOWER',
            'tag' => 'iBP',
            'country' => 'us',
        ];

        $teams[] = [
            'name' => 'Copenhagen Wolves',
            'tag' => 'CPH Wolves',
            'country' => 'dk',
        ];

        $teams[] = [
            'name' => 'Epsilon eSports',
            'tag' => 'Epsilon',
            'country' => 'fr',
        ];

        $teams[] = [
            'name' => 'dAT Team',
            'tag' => 'dAT',
            'country' => 'ru',
        ];

        $teams[] = [
            'name' => 'HellRaisers',
            'tag' => 'HR',
            'country' => 'ua',
        ];

        $teams[] = [
            'name' => 'LDLC.com, Team',
            'tag' => 'LDLC',
            'country' => 'fr',
        ];

        $teams[] = [
            'name' => 'Virtus.pro',
            'tag' => 'VP',
            'country' => 'pl',
        ];

        $teams[] = [
            'name' => 'Vox Eminor',
            'tag' => 'VOXEMINOR',
            'country' => 'au',
        ];

        $teams[] = [
            'name' => 'MTS GameGod Wolf',
            'tag' => 'Wolf',
            'country' => 'in',
        ];

        foreach($teams as $team) {
            $this->createTeam($team);
        }

        DB::statement("SET foreign_key_checks = 1");
    }

    private function createTeam($team)
    {
        $team = array_merge($team, ['slug' => Str::slug($team['name'])]);
        Team::create($team);
    }

}
