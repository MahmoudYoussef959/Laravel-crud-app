<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();
        return view('posts.index', ['posts' => $postsFromDB]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
    $data = $request->all();
    $title = $request->title;
    $description = $request->description;
    $postedBy = $request->posted_by;

    $post = new Post;
    $post->title = $title;
    $post->description = $description;
    $post->posted_by = $postedBy;
    // dd($request->all());
    $post->save();

    return to_route('posts.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
     $post = Post::findOrFail($id);

    $post->title = $request->title;
    $post->description = $request->description;
    $post->posted_by = $request->posted_by; // if needed

    $post->save();

    return redirect()->route('posts.index');
}

    public function destroy($id)
    {
       $post = Post::findOrFail($id);
       $post->delete();
       return to_route('posts.index');

    }
}
