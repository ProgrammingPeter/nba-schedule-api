<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $schedules = 'schedules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['home_team', 'away_team', 'date', 'televized', 'network'];
}
