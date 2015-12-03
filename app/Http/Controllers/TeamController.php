<?php

namespace App\Http\Controllers;

use App\Team;
use App\Conference;
use App\Division;
use App\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;

class TeamController extends Controller
{
        // Get Team by Id
        public function getById($id)
        {
            if (!is_numeric($id)) {
                return new Http\Response("Incorrect Team Id", 400);
            }

            $team = null;

            // Try and see if the integer exists in our DB
            try {
                $team = Team::findOrFail($id);
            } catch (ModelNotFoundException $e) {
                return new Http\Response("Incorrect Team Id", 400);
            }

            return new Http\Response($team, 200);
        }

        // Get the schedule By Team Id
        public function getScheduleByTeam($id)
        {

            if (!is_numeric($id)) {
                return new Http\Response("Incorrect Team Id", 400);
            }

            $team = null;

            // Try and see if the integer exists in our DB
            try {
                $team = Team::findOrFail($id);
            } catch (ModelNotFoundException $e) {
                return new Http\Response("Incorrect Team Id", 400);
            }   

            // Concatenate the city and team name for the query
            $teamName = $team->city . ' ' . $team->team_name;
            $schedule = Schedule::where('home_team', $teamName)->orWhere('away_team', $teamName)->get();

            return new Http\Response($schedule, 200);

        }

        // Get all the Teams
        public function getAll()
        {
            $teams = Team::all();

            return new Http\Response($teams, 200);
        }
}