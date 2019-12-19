<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $posts = $user->profile->posts;

        return view('profiles.index', ['posts' => $posts]);
    }
}
