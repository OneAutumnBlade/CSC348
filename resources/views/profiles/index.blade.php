@extends('layouts.app')

@section('content')
    <p>These are all your posts<p>

    <ul>
        @foreach ($posts as $post)
            <div>
                {{$post->post_body}}
                <br><b>Posted by {{App\Profile::find($post->profile_id)->name}}</b>
                @foreach ($post->comments as $comment)
                
                <div>
                    {{$comment->comment_body}}
                    <br><b>Commented by {{App\Profile::find($comment->profile_id)->name}}</b>
                </div>
                @endforeach
            </div>

        @endforeach
    </ul>

@endsection