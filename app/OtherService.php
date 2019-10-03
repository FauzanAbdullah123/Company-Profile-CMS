<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class OtherService extends Model
{
    use LogsActivity;

    protected $fillable = [
        'image','title','desc'
    ];

    public $timestamps = true;

    public function getRouteKeyName()
    {
        return 'title';
    }

    protected static $logFillable = true;
}
