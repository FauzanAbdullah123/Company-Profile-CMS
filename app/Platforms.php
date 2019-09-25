<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Platforms extends Model
{
    use LogsActivity;

    protected $fillable = [
        'platforms','percentage','title'
    ];

    public $timestamps = true;

    protected static $logFillable = true;
}
