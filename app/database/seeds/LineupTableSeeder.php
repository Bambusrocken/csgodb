<?php

use Cdb\Team\Lineup;

class LineupTableSeeder extends Seeder
{
    private $lineups = [];

    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('lineups')->truncate();
        DB::table('lineup_player')->truncate();
        DB::statement("SET foreign_key_checks = 1");

        // NiP
        $nip = Lineup::create([
            'team_id' => 1,
            'start_date' => '2012-08-10',
        ]);
        $nip->players()->sync([6, 7, 8, 9, 10]);

        // New Titan
        $titan = Lineup::create([
            'team_id' => 3,
            'start_date' => '2014-09-03',
        ]);
        $titan->players()->sync([4, 2, 33, 34, 35]);

        // Old Titan
        $titan = Lineup::create([
            'team_id' => 2,
            'start_date' => '2014-04-28',
            'end_date' => '2014-09-03',
        ]);
        $titan->players()->sync([1, 2, 3, 4, 5]);

        // Shox Titan
        $titan = Lineup::create([
            'team_id' => 2,
            'start_date' => '2013-05-07',
            'end_date' => '2014-04-28',
        ]);
        $titan->players()->sync([1, 2, 3, 5, 36]);

        // Scream Titan
        $titan = Lineup::create([
            'team_id' => 2,
            'start_date' => '2013-01-16',
            'end_date' => '2013-05-07',
        ]);
        $titan->players()->sync([1, 2, 3, 4, 5]);

        // Start Titan
        $titan = Lineup::create([
            'team_id' => 2,
            'start_date' => '2012-08-30',
            'end_date' => '2013-01-16',
        ]);
        $titan->players()->sync([2, 3, 4, 5, 37]);

    }
}
