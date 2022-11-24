<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);

        return view('dashboard.posts.list', compact('posts'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data['user_id'] = auth()->user()->id;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
            $data['image']->move(public_path('images'), $filename);
            $data['image'] = $filename;
        }

        $post = Post::create($data);

        return redirect()->route('dashboard.posts')->with('message', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data = Post::find($post->id);
        
        return view('dashboard.posts.edit', ['post' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->id) {
            $data = Post::find($post->id);
            $data->delete();
            return redirect()->route('dashboard.posts')->with('message', 'Post deleted successfully');
        }
        return redirect()->route('dashboard.posts')->with('message', 'Post not found');
    }
}
