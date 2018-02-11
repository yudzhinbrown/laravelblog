<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];

     public static function checkUniqueSlug($slug)
    {
        if ((Category::where('slug', '=', $slug))->exists()) {
            return false;
        } else {
            return true;
        }
    }
}
