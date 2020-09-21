<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'image',
        'movie',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
