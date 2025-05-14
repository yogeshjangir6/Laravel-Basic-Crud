@extends('layouts.app')
@section('title', 'Posts')
@section('content')
    <h1>{{  $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <br/>
   
    <a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete Post">
    </form>
    <br/>
     <a href="{{ route('posts.index') }}">Back to Posts</a><br/>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <br/>

@endsection