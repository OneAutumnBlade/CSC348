@extends('layouts.app')

@section('content')

    <p>Welcome to UniSpace, created for my CSC348 coursework</p>

<a href="{{route('posts.index')}}">Posts</a>
<br><a href="{{route('posts.create')}}">Make a Post</a>
<br><a href="{{route('profile.index')}}">Your Profile</a>
@endsection
