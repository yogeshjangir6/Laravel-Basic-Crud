@extends('layouts.app')
@section('title')
All Posts
@endsection
@section('content')
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>

    <ul>
        @foreach ($posts as $post)
           <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
              <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display:inline">
                 @csrf
                 @method('DELETE')
                 <input type="submit" value="Delete Post">
                </form>
        @endforeach
    </ul>

@endsection