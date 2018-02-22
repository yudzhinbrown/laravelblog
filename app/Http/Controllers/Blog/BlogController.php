<?php

namespace App\Http\Controllers\Blog;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class BlogController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->where('published' , true)->first();

       return view('blog.category', [
           'category' => $category,
           'posts' => $category->posts()->where('published' , true)->paginate(10)
       ]);
    }

    public function post($category_slug, $post_slug){
        return view('blog.post', [
           'post' => Post::where('slug' , $post_slug)->first()
        ]);

    }

    public function tag($slug){
        $tag = Tag::where('slug', $slug)->first();

        return view('blog.tag',[
            'tag' => $tag,
            'posts' => $tag->posts()->paginate(),
        ]);
    }
}
