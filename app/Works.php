<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Works extends Model
{
    use LogsActivity;

    protected $fillable = [
        'image','title','desc','address','jobs'
    ];

    public $timestamps = true;

    protected static $logFillable = true;

}
