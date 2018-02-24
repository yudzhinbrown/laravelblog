<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
    public function commentFilter(Request $request){
        return view('admin.comments.index', [
            'comments' => Comment::where('commentable_id', $request->input('post'))->paginate(10),
            'posts'    => Post::where('published', true)->get(),
        ]);
    }

    public function postFilter(Request $request){
        return view('admin.posts.index', [
            'posts' => Post::orderBy('created_at', 'desc')->where('category_id', $request->input('category'))->paginate(10),
            'categories' => Category::where('published', true)->get(),
        ]);
    }
}
