<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{

    const PATH = "uploads/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::query()->orderByDesc('id')->get();
        $categories = Category::query()->get();
        $tags = Tag::query()->get();
        return view('admin.index', compact('posts', 'categories', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->get();
        $tags = Tag::query()->get();
        return view('admin.create-post', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::query()->create([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() + rand(1, 99999);
            $extension = $image->getClientOriginalExtension();
            $image->move(public_path(self::PATH), $fileName);
            imageConvert(public_path(self::PATH), $fileName, $extension);
            $post->image = self::PATH . $fileName . '.webp';
            $post->save();
        }

        if ($request->has('tags')) {
            foreach ($request->input('tags') as $tag) {
                $postTag = new PostTag();
                $postTag->post_id = $post->id;
                $postTag->tag_id = $tag;
                $postTag->save();
            }
        }

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $post
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Models\Post $post)
    {
        return view('admin.show-post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Models\Post $post)
    {
        $categories = Category::query()->get();
        $tags = Tag::query()->get();
        return view('admin.edit-post', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Models\Post $post)
    {
        $post->update([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        if ($request->hasFile('image')) {
            try {
                File::delete(public_path($post->image));
            } catch (\Exception $e) {
            }
            $image = $request->file('image');
            $fileName = time() + rand(1, 99999);
            $extension = $image->getClientOriginalExtension();
            $image->move(public_path(self::PATH), $fileName);
            imageConvert(public_path(self::PATH), $fileName, $extension);
            $post->image = self::PATH . $fileName . '.webp';
            $post->save();
        }

        if ($request->has('tags')) {
            PostTag::query()->where('post_id', $post->id)->delete();
            foreach ($request->tags as $tag) {
                $postTag = new PostTag();
                $postTag->post_id = $post->id;
                $postTag->tag_id = $tag;
                $postTag->save();
            }
        } else {
            PostTag::query()->where('post_id', $post->id)->delete();
        }

        return redirect()->route('post.index', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(\App\Models\Post $post)
    {
        PostTag::query()->where('post_id', $post->id)->delete();

        try {
            File::delete($post->image);
        } catch (\Exception $e) {
        }

        $post->delete();

        return redirect()->route('post.index');

    }
}
