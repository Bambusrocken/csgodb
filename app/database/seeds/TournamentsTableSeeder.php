<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Cdb\Tournament\Tournament;
use Faker\Factory as Faker;

class TournamentsTableSeeder extends Seeder {

	public function run()
	{
        DB::statement("SET foreign_key_checks = 0");

        Tournament::truncate();

        $tournaments = [];

        $tournaments[] = [
            'name' => 'ESL One Cologne 2014',
            'start_date' => '2014-08-14',
            'end_date' => '2014-08-17',
            'location' => 'GamesCon, Cologne, Germany',
            'pricepool' => 250000,
        ];

        $tournaments[] = [
            'name' => 'EMS One Katowice 2014',
            'start_date' => '2014-03-13',
            'end_date' => '2014-03-16',
            'location' => 'Katowice, Poland',
            'pricepool' => 250000,
        ];

        $tournaments[] = [
            'name' => 'DreamHack Winter 2013',
            'start_date' => '2013-11-28',
            'end_date' => '2013-11-30',
            'location' => 'Jonkoping, Sweden',
            'pricepool' => 250000,
        ];

        foreach($tournaments as $tournament) {
            $this->createTournament($tournament);
        }

        DB::statement("SET foreign_key_checks = 1");
    }

    private function createTournament($tournament) {
        $tournament = array_merge($tournament, ['slug' => Str::slug($tournament['name'])]);
        Tournament::create($tournament);
    }

}
