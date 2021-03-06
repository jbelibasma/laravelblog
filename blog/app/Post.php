<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function author()
    {
        return $this->belongsTo('App\Author');
    }
    protected $guarded = [];

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

}
