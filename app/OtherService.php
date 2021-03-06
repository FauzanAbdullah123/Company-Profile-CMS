<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class OtherService extends Model
{
    use LogsActivity;

    protected $fillable = [
        'image', 'title', 'slug', 'desc'
    ];
    public $timestamps = true;

    public function service()
    {
        return $this->belongsToMany('App\Service', 'service_otherservice', 'otherservice_id', 'service_id');
    }
    public static function boot()
    {
        parent::boot();
        self::deleting(function ($otherservice) {
            // mengecek apakah penulis masih punya buku
            if ($otherservice->service->count() > 0) {
                //menyiapkan pesan error
                $html = 'Other Service tidak bisa dihapus karena masih digunakan oleh Service: ';
                $html .= '<ul>';
                foreach ($otherservice->service as $data) {
                    $html .= "<li>$data->title<li>";
                }
                $html .= '<ul>';
                Session::flash("flash_notification", [
                    "level" => "danger",
                    "message" => $html
                ]);
                //membatalkan proses penghapusan
                return false;
            }
        });
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}