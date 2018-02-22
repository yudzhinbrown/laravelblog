<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    protected $fillable = ['title', 'slug', 'published'];

    public function posts(){
        return $this->morphedByMany('App\Post', 'tagable');
    }

}
