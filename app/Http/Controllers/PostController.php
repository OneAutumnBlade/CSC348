<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_body' => 'required'
        ]);

        $user = auth()->user();

        $a = new Post;
        $a->post_body = $validatedData['post_body'];
        $a->profile_id = $user->profile->id;
        $a->save();

        return redirect()->route('posts.index');
    }
}
