<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Logo extends Model
{
    use LogsActivity;

    protected $fillable = [
        'image'
    ];

    public $timestamps = true;

    // protected static $logFillable = true;

    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}
    