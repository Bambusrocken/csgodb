<?php

use Cdb\Player\Player;
use Illuminate\Support\Str;

class PlayersTableSeeder extends Seeder {

	public function run()
	{
        DB::statement("SET foreign_key_checks = 0");

        Player::truncate();

        $players = array();

        // Titan
        $players[] = [
            'name' => 'ScreaM',
            'firstname' => 'Adil',
            'lastname' => 'Benrlitom',
            'country' => 'be',
            //'team_id' => 1,
        ];

        $players[] = [
            'name' => 'Ex6TenZ',
            'firstname' => 'Kévin',
            'lastname' => 'Droolans',
            'country' => 'be',
            //'team_id' => 1,
        ];

        $players[] = [
            'name' => 'NBK',
            'firstname' => 'Nathan',
            'lastname' => 'Schmitt',
            'country' => 'fr',
            //'team_id' => 1,
        ];

        $players[] = [
            'name' => 'kennyS',
            'firstname' => 'Kenny',
            'lastname' => 'Schrub',
            'country' => 'fr',
            //'team_id' => 1,
        ];

        $players[] = [
            'name' => 'SmithZz',
            'firstname' => 'Edouard',
            'lastname' => 'Dubourdeaux',
            'country' => 'fr',
            //'team_id' => 1,
        ];

        // NiP
        $players[] = [
            'name' => 'f0rest',
            'firstname' => 'Patrik',
            'lastname' => 'Lindberg',
            'country' => 'se',
            //'team_id' => 2,
        ];

        $players[] = [
            'name' => 'GeT_RiGhT',
            'firstname' => 'Christopher',
            'lastname' => 'Alesund',
            'country' => 'se',
            //'team_id' => 2,
        ];

        $players[] = [
            'name' => 'friberg',
            'firstname' => 'Adam',
            'lastname' => 'Friberg',
            'country' => 'se',
            //'team_id' => 2,
        ];

        $players[] = [
            'name' => 'Xizt',
            'firstname' => 'Richard',
            'lastname' => 'Landström',
            'country' => 'se',
            //'team_id' => 2,
        ];

        $players[] = [
            'name' => 'Fifflaren',
            'firstname' => 'Robin',
            'lastname' => 'Johansson',
            'country' => 'se',
            //'team_id' => 2,
        ];

        // NaVi
        $players[] = [
            'name' => 'starix',
            'firstname' => 'Sergey',
            'lastname' => 'Ischuk',
            'country' => 'ua',
            //'team_id' => 3,
        ];

        $players[] = [
            'name' => 'Zeus',
            'firstname' => 'Daniil',
            'lastname' => 'Teslenko',
            'country' => 'ua',
            //'team_id' => 3,
        ];

        $players[] = [
            'name' => 'Edward',
            'firstname' => 'Ioann',
            'lastname' => 'Sukhariev',
            'country' => 'ua',
            //'team_id' => 3,
        ];

        $players[] = [
            'name' => 'GuardiaN',
            'firstname' => 'Ladislav',
            'lastname' => 'Kovacs',
            'country' => 'sk',
            //'team_id' => 3,
        ];

        $players[] = [
            'name' => 'Seized',
            'firstname' => 'Denis',
            'lastname' => 'Kostin',
            'country' => 'ru',
            //'team_id' => 3,
        ];

        // mouz
        $players[] = [
            'name' => 'chrisJ',
            'firstname' => 'Chris',
            'lastname' => 'de Jong',
            'country' => 'nl',
            //'team_id' => 4,
        ];

        $players[] = [
            'name' => 'allu',
            'firstname' => 'Aleksi',
            'lastname' => 'Jalli',
            'country' => 'fi',
            //'team_id' => 4,
        ];

        $players[] = [
            'name' => 'LEGIJA',
            'firstname' => 'Nikola',
            'lastname' => 'Ninic',
            'country' => 'rs',
            //'team_id' => 4,
        ];

        $players[] = [
            'name' => 'nooky',
            'firstname' => 'Andre',
            'lastname' => 'Utesch',
            'country' => 'de',
            //'team_id' => 4,
        ];

        $players[] = [
            'name' => 'tabseN',
            'firstname' => 'Johannes',
            'lastname' => 'Wodarz',
            'country' => 'de',
            //'team_id' => 4,
        ];

        // fnatic
        $players[] = [
            'name' => 'flusha',
            'firstname' => 'Robin',
            'lastname' => 'Rönnquist',
            'country' => 'se',
            //'team_id' => 5,
        ];

        $players[] = [
            'name' => 'JW',
            'firstname' => 'Jesper',
            'lastname' => 'Wecksell',
            'country' => 'se',
            //'team_id' => 5,
        ];

        $players[] = [
            'name' => 'pronax',
            'firstname' => 'Markus',
            'lastname' => 'Wallsten',
            'country' => 'se',
            //'team_id' => 5,
        ];

        $players[] = [
            'name' => 'krimz',
            'firstname' => 'Freddy',
            'lastname' => 'Johansson',
            'country' => 'se',
            //'team_id' => 5,
        ];

        $players[] = [
            'name' => 'olofm',
            'firstname' => 'Olof',
            'lastname' => 'Kajbjer',
            'country' => 'se',
            //'team_id' => 5,
        ];

        // dignitas
        $players[] = [
            'name' => 'dev1ce',
            'firstname' => 'Nicolai',
            'lastname' => 'Reedtz',
            'country' => 'dk',
            //'team_id' => 6,
        ];

        $players[] = [
            'name' => 'Xyp9x',
            'firstname' => 'Andreas',
            'lastname' => 'Højsleth',
            'country' => 'dk',
            //'team_id' => 6,
        ];

        $players[] = [
            'name' => 'dupreeh',
            'firstname' => 'Peter',
            'lastname' => 'Rasmussen',
            'country' => 'dk',
            //'team_id' => 6,
        ];

        $players[] = [
            'name' => 'FeTiSh',
            'firstname' => 'Henrik',
            'lastname' => 'Christensen',
            'country' => 'dk',
            //'team_id' => 6,
        ];

        $players[] = [
            'name' => 'aizy',
            'firstname' => 'Philip',
            'lastname' => 'Aistrup',
            'country' => 'dk',
            //'team_id' => 6,
        ];

        // Ex-fnatic
        $players[] = [
            'name' => 'Devilwalk',
            'firstname' => 'Jonatan',
            'lastname' => 'Lundberg',
            'country' => 'se',
        ];

        $players[] = [
            'name' => 'schneider',
            'firstname' => 'Andreas',
            'lastname' => 'Lindberg',
            'country' => 'se',
        ];

        // New titan
        $players[] = [
            'name' => 'apEX',
            'firstname' => 'Dan',
            'lastname' => 'Madesclaire',
            'country' => 'fr'
        ];

        $players[] = [
            'name' => 'Maniac',
            'firstname' => 'Mathieu',
            'lastname' => 'Quiquerez',
            'country' => 'fr'
        ];

        $players[] = [
            'name' => 'KQLY',
            'firstname' => 'Hovik',
            'lastname' => 'Tovmassian',
            'country' => 'fr'
        ];

        $players[] = [
            'name' => 'shox',
            'firstname' => 'Richard',
            'lastname' => 'Papillon',
            'country' => 'fr'
        ];

        $players[] = [
            'name' => 'RpK',
            'firstname' => 'Cédric',
            'lastname' => 'Guipouy',
            'country' => 'fr'
        ];

        /* template
        $players[] = [
            'name' => '',
            'firstname' => '',
            'lastname' => '',
            'country' => '',
            //'team_id' => ,
        ];
        */

        foreach($players as $player)
        {
            $this->createPlayer($player);
        }

        DB::statement("SET foreign_key_checks = 1");
	}

    private function createPlayer($player)
    {
        $player = array_merge($player, ['slug' => Str::slug($player['name'])]);
        Player::create($player);
    }

}
