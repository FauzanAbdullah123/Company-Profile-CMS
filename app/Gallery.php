<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'foto'
    ];

    public $timestamps = true;

    protected static $logFillable = true;
}
