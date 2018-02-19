<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;


class SlugController extends Controller
{
    public function generalSlug(Request $request){
        $slug = Str::slug(mb_substr($request->input('title'), 0, 40). '-' . Carbon::now()->timestamp , '-');
        return response()->json(['slug' => $slug]);
    }
}
