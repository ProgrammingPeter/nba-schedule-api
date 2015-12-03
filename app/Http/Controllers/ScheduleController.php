<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http;

class ScheduleController extends Controller
{
        public function getAll()
        {
            $schedules = Schedule::all();

            return new Http\Response($schedules, 200);
        }
}