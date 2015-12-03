<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $divisions = 'divisions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'conferenceId'];
}
