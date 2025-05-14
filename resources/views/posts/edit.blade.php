@extends('layouts.app')
@section('title')
Edit Post
@endsection
@section('content')
    <h1>Edit Post</h1>
    <form action="{{  route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{  $post->id }}">
        <div>
            <label for="title">Title</label><br/>
            <input type="text" name="title" id="title" value="{{  $post->title }}">
        </div>
        <div>
            <label for="body">Body:</label><br/>
            <textarea name="body" id="body" required>{{  $post->body }}</textarea>
        </div>
        <input type="submit" value="Update Post">
    </form>
    <br/>
     <a href="{{ route('posts.index') }}">Back to Posts</a><br/>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <br/>

@endsection