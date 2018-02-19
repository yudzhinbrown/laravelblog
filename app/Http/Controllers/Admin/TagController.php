<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TagFormRequest;
use App\Tag;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tags.index', [
            'tags' => Tag::orderBy('id', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TagFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagFormRequest $request)
    {
        Tag::create($request->all());
        return redirect()->route('admin.tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit',
            ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TagFormRequest $request
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(TagFormRequest $request, Tag $tag)
    {
        $slug = ['slug' => ''];
        $tag->update($request->all() + $slug);
        return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag $tag
     * @return void
     * @throws \Exception
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
