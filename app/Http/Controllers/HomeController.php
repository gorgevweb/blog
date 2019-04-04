<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
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
        $posts = Post::query()->paginate(3);
        return view('index', compact('posts'));
    }

//    public function login()
//    {
//        return view('auth.login');
//    }
//    public function register()
//    {
//        return view('auth.register');
//    }


}
