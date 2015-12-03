<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		if (($handle = fopen(dirname(__FILE__) . '/' . 'nbaSchedules.csv', "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1500, ",")) !== FALSE) {

		        if (count($data) === 5) {
		        	DB::table('schedules')->insert([
		            'home_team' => $data[0],
		            'away_team' => $data[1],
		            'date' => $data[2],
		            'televized' => $data[3],
		            'network' => $data[4]
		        	]);
		        }

		    }
		    fclose($handle);
		}
    }
}
