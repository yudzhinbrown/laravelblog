<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['text', 'commentable_id', 'commentable_type', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    /*name : commentable - не обязательно если название функции commentable */
    public function commentable()
    {
        return $this->morphTo('commentable');
    }


}
