@extends('layouts.app')

@section('content')
    <p>The public forum of posts available to all<p>

    <ul>
        @foreach ($posts as $post)
            <div>
                <a href="{{route('posts.show',['id' => $post->id])}}">{{$post->post_body}}</a>
                <br>Posted by {{App\Profile::find($post->profile_id)->name}}
            </div>
        @endforeach
    </ul>

@endsection