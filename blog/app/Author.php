<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->hasMany('App\Post');
    }

}
