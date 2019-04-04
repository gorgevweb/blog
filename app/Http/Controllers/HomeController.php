<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    /**
     * Display index page
     * @return Factory|View
     */
    public function index()
    {
        $category =Category::query()->get();
        $tags = Tag::query()->get();
        $posts = Post::query()->paginate(3);
        return view('index', compact('posts','category','tags'));
    }

}
