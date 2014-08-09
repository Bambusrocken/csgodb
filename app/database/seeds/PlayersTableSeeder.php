<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class PlayersTableSeeder extends Seeder {

	public function run()
	{
        Player::truncate();

        // Titan
        Player::create([
            'name' => 'ScreaM',
            'firstname' => 'Adil',
            'lastname' => 'Benrlitom',
            'country' => 'be',
            'team_id' => 1,
        ]);

        Player::create([
            'name' => 'Ex6TenZ',
            'firstname' => 'Kévin',
            'lastname' => 'Droolans',
            'country' => 'be',
            'team_id' => 1,
        ]);

        Player::create([
            'name' => 'NBK',
            'firstname' => 'Nathan',
            'lastname' => 'Schmitt',
            'country' => 'fr',
            'team_id' => 1,
        ]);

        Player::create([
            'name' => 'kennyS',
            'firstname' => 'Kenny',
            'lastname' => 'Schrub',
            'country' => 'fr',
            'team_id' => 1,
        ]);

        Player::create([
            'name' => 'SmithZz',
            'firstname' => 'Edouard',
            'lastname' => 'Dubourdeaux',
            'country' => 'fr',
            'team_id' => 1,
        ]);

        // NiP
        Player::create([
            'name' => 'f0rest',
            'firstname' => 'Patrik',
            'lastname' => 'Lindberg',
            'country' => 'se',
            'team_id' => 2,
        ]);

        Player::create([
            'name' => 'GeT_RiGhT',
            'firstname' => 'Christopher',
            'lastname' => 'Alesund',
            'country' => 'se',
            'team_id' => 2,
        ]);

        Player::create([
            'name' => 'friberg',
            'firstname' => 'Adam',
            'lastname' => 'Friberg',
            'country' => 'se',
            'team_id' => 2,
        ]);

        Player::create([
            'name' => 'Xizt',
            'firstname' => 'Richard',
            'lastname' => 'Landström',
            'country' => 'se',
            'team_id' => 2,
        ]);

        Player::create([
            'name' => 'Fifflaren',
            'firstname' => 'Robin',
            'lastname' => 'Johansson',
            'country' => 'se',
            'team_id' => 2,
        ]);

        // NaVi
        Player::create([
            'name' => 'starix',
            'firstname' => 'Sergey',
            'lastname' => 'Ischuk',
            'country' => 'ua',
            'team_id' => 3,
        ]);

        Player::create([
            'name' => 'Zeus',
            'firstname' => 'Daniil',
            'lastname' => 'Teslenko',
            'country' => 'ua',
            'team_id' => 3,
        ]);

        Player::create([
            'name' => 'Edward',
            'firstname' => 'Ioann',
            'lastname' => 'Sukhariev',
            'country' => 'ua',
            'team_id' => 3,
        ]);

        Player::create([
            'name' => 'GuardiaN',
            'firstname' => 'Ladislav',
            'lastname' => 'Kovacs',
            'country' => 'sk',
            'team_id' => 3,
        ]);

        Player::create([
            'name' => 'Seized',
            'firstname' => 'Denis',
            'lastname' => 'Kostin',
            'country' => 'ru',
            'team_id' => 3,
        ]);


	}

}
