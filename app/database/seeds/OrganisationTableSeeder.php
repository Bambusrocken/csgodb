<?php

use Cdb\Team\Organisation;

class OrganisationTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        Organisation::truncate();
        DB::table('organisation_team')->truncate();
        DB::statement("SET foreign_key_checks = 1");

        Organisation::create(['name' => 'NiP', 'country' => 'se']);
        Organisation::create(['name' => 'Titan', 'country' => 'sg']);
        Organisation::create(['name' => 'Team VeryGames', 'country' => 'fr']);
    }
}
