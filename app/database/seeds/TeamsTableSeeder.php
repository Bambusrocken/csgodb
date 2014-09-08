<?php

use Cdb\Team\Team;

class TeamsTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('teams')->truncate();
        DB::statement("SET foreign_key_checks = 1");

        // NiP
        $nip = Team::create(['name' => 'Ninjas in Pyjamas']);
        $nip->organisations()->sync([1]);

        // Old Titan
        $titan = Team::create(['name' => 'Titan']);
        $titan->organisations()->sync([2,3]);

        // Titan
        $titan = Team::create(['name' => 'Titan']);
        $titan->organisations()->sync([2]);
    }
}
