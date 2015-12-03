<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'city' => 'Boston',
            'team_name' => 'Celtics',
            'divisionId' => 1
        ]);
        DB::table('teams')->insert([
            'city' => 'Brooklyn',
            'team_name' => 'Nets',
            'divisionId' => 1
        ]);
        DB::table('teams')->insert([
            'city' => 'New York',
            'team_name' => 'Knicks',
            'divisionId' => 1
        ]);
        DB::table('teams')->insert([
            'city' => 'Philadelphia',
            'team_name' => '76ers',
            'divisionId' => 1
        ]);
        DB::table('teams')->insert([
            'city' => 'Toronto',
            'team_name' => 'Raptors',
            'divisionId' => 1
        ]);
        DB::table('teams')->insert([
            'city' => 'Chicago',
            'team_name' => 'Bulls',
            'divisionId' => 2
        ]);
        DB::table('teams')->insert([
            'city' => 'Cleveland',
            'team_name' => 'Cavaliers',
            'divisionId' => 2
        ]);
        DB::table('teams')->insert([
            'city' => 'Detroit',
            'team_name' => 'Pistons',
            'divisionId' => 2
        ]);
        DB::table('teams')->insert([
            'city' => 'Indiana',
            'team_name' => 'Pacers',
            'divisionId' => 2
        ]);
        DB::table('teams')->insert([
            'city' => 'Milwaukee',
            'team_name' => 'Bucks',
            'divisionId' => 2
        ]);
        DB::table('teams')->insert([
            'city' => 'Atlanta',
            'team_name' => 'Hawks',
            'divisionId' => 3
        ]);
        DB::table('teams')->insert([
            'city' => 'Charlotte',
            'team_name' => 'Hornets',
            'divisionId' => 3
        ]);
        DB::table('teams')->insert([
            'city' => 'Miami',
            'team_name' => 'Heat',
            'divisionId' => 3
        ]);
        DB::table('teams')->insert([
            'city' => 'Orlando',
            'team_name' => 'Magic',
            'divisionId' => 3
        ]);
        DB::table('teams')->insert([
            'city' => 'Washington',
            'team_name' => 'Wizards',
            'divisionId' => 3
        ]);
        DB::table('teams')->insert([
            'city' => 'Golden State',
            'team_name' => 'Warriors',
            'divisionId' => 4
        ]);
        DB::table('teams')->insert([
            'city' => 'Los Angeles',
            'team_name' => 'Clippers',
            'divisionId' => 4
        ]);
        DB::table('teams')->insert([
            'city' => 'Los Angeles',
            'team_name' => 'Lakers',
            'divisionId' => 4
        ]);
        DB::table('teams')->insert([
            'city' => 'Phoenix',
            'team_name' => 'Suns',
            'divisionId' => 4
        ]);
        DB::table('teams')->insert([
            'city' => 'Sacramento',
            'team_name' => 'Kings',
            'divisionId' => 4
        ]);
        DB::table('teams')->insert([
            'city' => 'Dallas',
            'team_name' => 'Mavericks',
            'divisionId' => 5
        ]);
        DB::table('teams')->insert([
            'city' => 'Houston',
            'team_name' => 'Rockets',
            'divisionId' => 5
        ]);
        DB::table('teams')->insert([
            'city' => 'Memphis',
            'team_name' => 'Grizzlies',
            'divisionId' => 5
        ]);
        DB::table('teams')->insert([
            'city' => 'New Orleans',
            'team_name' => 'Pelicans',
            'divisionId' => 5
        ]);
        DB::table('teams')->insert([
            'city' => 'San Antonio',
            'team_name' => 'Spurs',
            'divisionId' => 5
        ]);
        DB::table('teams')->insert([
            'city' => 'Denver',
            'team_name' => 'Nuggets',
            'divisionId' => 6
        ]);
        DB::table('teams')->insert([
            'city' => 'Minnesota',
            'team_name' => 'Timberwolves',
            'divisionId' => 6
        ]);
        DB::table('teams')->insert([
            'city' => 'Oklahoma City',
            'team_name' => 'Thunder',
            'divisionId' => 6
        ]);
        DB::table('teams')->insert([
            'city' => 'Portland',
            'team_name' => 'Trailblazers',
            'divisionId' => 6
        ]);
        DB::table('teams')->insert([
            'city' => 'Utah',
            'team_name' => 'Jazz',
            'divisionId' => 6
        ]);

    }
}
