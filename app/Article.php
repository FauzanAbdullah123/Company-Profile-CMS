<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Article extends Model
{
    use LogsActivity;

    protected $fillable = [
        'judul', 'slug','foto',
        'konten', 'user_id', 'category_id'
    ];
    public $timestamps = true;
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'article_tag', 'article_id', 'tag_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static $logFillable = true;
}
