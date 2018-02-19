<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'video', 'description_short', 'description', 'published', 'publication_date', 'category_id', 'user_id'];


    // Polymorphic relation with tags
    public function tags(){
        return $this->morphToMany('App\Tag', 'tagable');
    }


    //Get format date
    public function getDate()
    {
        return $this->updated_at->format('d/m/Y');
    }

    public function user(){
        return $this->belongsTo('App\User')->first()->name;
    }

    //Mutator video
    public function setVideoAttribute($video){
        if ((stristr($video, 'v='))){
            $code = explode('v=', $video);
            $code[1] = stristr($code[1], '&') ? explode('&', $code[1])[0]: $code[1];
            $this->attributes['video'] = $code[1];
        } else {
            $this->attributes['video'] = null;
        }
    }
}
