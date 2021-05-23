<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Routing\RedirectController;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Posts::latest()->paginate(5);
        return view('posts.index', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]
        );
        Posts::create($request->all());

        return redirect()->route('posts.index')
        ->with('success', 'Post created seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $post)
    {
        $request->validate([
            'title'=>"required",
            "body"=>"required",
        ]);
        $post->update($request->all());
        return redirect()->route('posts.index')
        ->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
        ->with('success', 'Post deleted successfully');
    }
}
