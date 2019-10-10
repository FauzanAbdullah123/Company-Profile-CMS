<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Service extends Model
{
    use LogsActivity;

    protected $fillable = [
        'image', 'title','desc'
    ];
    public $timestamps = true;

    public function Catservice()
    {
        return $this->belongsTo('App\Catservice', 'catservice_id');
    }

    public function otherservice()
    {
        return $this->belongsToMany('App\Otherservice', 'service_otherservice', 'service_id', 'otherservice_id');
    }

    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}