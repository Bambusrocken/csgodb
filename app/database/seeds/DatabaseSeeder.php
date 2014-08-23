<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TeamsTableSeeder');
        $this->call('PlayersTableSeeder');
        $this->call('PlayerteamrecordsTableSeeder');
        $this->call('TeamnamesTableSeeder');
        $this->call('TournamentsTableSeeder');
        $this->call('TeamTournamentTableSeeder');
        $this->call('PlayerTeamTournamentTableSeeder');
        $this->call('MatchesTableSeeder');
	}

}
