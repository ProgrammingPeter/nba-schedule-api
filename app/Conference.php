<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $conferences = 'conferences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name'];
}
