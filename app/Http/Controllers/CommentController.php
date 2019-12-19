<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment_body' => 'required'
        ]);

        $user = auth()->user();

        $a = new Comment;
        $a->comment_body = $validatedData['comment_body'];
        $a->profile_id = $user->profile->id;
        $a->post_id = $request['post_id'];
        $a->save();

        return redirect()->route('posts.show', ['id' => $a->post_id]);
    }
}
