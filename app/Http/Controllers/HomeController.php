<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show(Post $post)
    {
        if(request('tag')) {
            //TODO add tag/category filtering
//            $posts = Tag::where('name', request('tag'))->firstOrFail()->posts;
//            return view());

        }
        return view('posts.show', compact('post'));
    }
}
