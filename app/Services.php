<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'foto','title','desc'
    ];

    public $timestamps = true;

    protected static $logFillable = true;

}
