<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            'name' => 'Atlantic Division',
            'conferenceId' => 1
        ]);
        DB::table('divisions')->insert([
            'name' => 'Central Division',
            'conferenceId' => 1
        ]);
        DB::table('divisions')->insert([
            'name' => 'Southeast Division',
            'conferenceId' => 1
        ]);
        DB::table('divisions')->insert([
            'name' => 'Northwest Division',
            'conferenceId' => 2
        ]);
        DB::table('divisions')->insert([
            'name' => 'Pacific Division',
            'conferenceId' => 2
        ]);
        DB::table('divisions')->insert([
            'name' => 'Southwest Division',
            'conferenceId' => 2
        ]);
    }
}
