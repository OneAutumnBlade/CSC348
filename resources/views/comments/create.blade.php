@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('comments.store')}}">
        @csrf
        <p>Comment: <input type="text" name="comment_body"></p>
        <input type="hidden" name="post_id" value="{{request()->route('id')}}">
        <input type="submit" value="Submit">
        <a href="{{route('posts.index')}}">Cancel</a>
    </form>
@endsection