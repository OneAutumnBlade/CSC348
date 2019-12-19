@extends('layouts.app')

@section('content')
    <p>These are all your posts<p>

    <ul>
        @foreach ($posts as $post)
            <div>
                <a href="{{route('posts.show',['id' => $post->id])}}">{{$post->post_body}}</a>
                <br><b>Posted by {{App\Profile::find($post->profile_id)->name}}</b>
                @foreach ($post->comments as $comment)
                
                @endforeach
            </div>

        @endforeach
    </ul>

@endsection