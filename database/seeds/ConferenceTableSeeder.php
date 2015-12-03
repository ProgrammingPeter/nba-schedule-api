<?php

use Illuminate\Database\Seeder;

class ConferenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conferences')->insert([
            'name' => 'Eastern conference'
        ]);
        DB::table('conferences')->insert([
            'name' => 'Western conference'
        ]);
    }
}
