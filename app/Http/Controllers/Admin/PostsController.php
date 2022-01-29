<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::All();
        $tags = Tag::All();

        return view('posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->category_id = $request->category;

        if(request('image')) {
            $new_image_name = time() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $new_image_name);
            $post->image_path = $new_image_name;
        }
        //'image' => $filename ?? null,
        $post->save();

        $post->tag()->sync($request->tags, false);




        return redirect(route('posts.index'))->with('success', 'Post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       // return view('posts.show')->with('post', Post::where('id', $post->id)->first());
       //return view('posts.show')->with('post', Post::find($post));
       return view('posts.show', ['post' => $post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {

        $post->title = request()->title;
        $post->body = request()->body;
        $post->user_id = auth()->user()->id;
        $post->category_id = request()->category;
        if(request('image')) {
            $new_image_name = time() . '-' . request()->title . '.' . request()->image->extension();
            request()->image->move(public_path('images'), $new_image_name);
            $post->image_path = $new_image_name;
        }

        $post->save();

        $post->tag()->sync(request('tags'), true);

        return redirect(route('posts.index'))->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        $image = public_path('images').$post->image_path;
        if(File::exists($image))
        {
            File::delete($image);
        }
        $post->delete();

        return redirect(route('posts.index'))->with('success', 'Post deleted!');;
    }
}
