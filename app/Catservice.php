<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Catservice extends Model
{
    use LogsActivity;

    protected $fillable = [
        'nama', 'slug',
    ];
    public $timestamps = true;
    
    public function service()
    {
        return $this->hasMany('App\Service', 'catservice_id');
    }
    public static function boot()
    {
        parent::boot();
        self::deleting(function ($catservice) {
            // mengecek apakah penulis masih punya buku
            if ($catservice->service->count() > 0) {
                //menyiapkan pesan error
                $html = 'Category Service tidak bisa dihapus karena masih digunakan oleh Service: ';
                $html .= '<ul>';
                foreach ($catservice->service as $data) {
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