@extends('layouts.app')

@section('content')
    <div>
        {{$post->post_body}}
        <br><b>Posted by {{App\Profile::find($post->profile_id)->name}}</b>
    </div>

    <a href="{{route('comments.create',['id' => $post->id])}}" class="button">Comment</a>

    @foreach ($post->comments as $comment)    
    <div>
        {{$comment->comment_body}}
        <br><b>Commented by {{App\Profile::find($comment->profile_id)->name}}</b>
    </div>
    @endforeach
@endsection