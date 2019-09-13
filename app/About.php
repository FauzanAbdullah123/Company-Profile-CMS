<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title','desc'
    ];

    public $timestamps = true;

    protected static $logFillable = true;
}
