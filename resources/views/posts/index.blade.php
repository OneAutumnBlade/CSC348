@extends('layouts.app')

@section('content')
    <p>The public forum of posts available to all<p>

    <ul>
        @foreach ($posts as $post)
            <li>{{$post->post_body}}</li>
        @endforeach
    </ul>

@endsection