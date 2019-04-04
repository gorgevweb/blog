<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::query()->get();
        return view('admin.blog.create-tag', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tag::query()->create([
            'name' => $request->input('name'),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Models\Tag $tag)
    {
        $tag->update([
            'name' => $request->input('name')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $tag
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function destroy(\App\Models\Tag $tag)
    {
        $tag->delete();
    }
}
