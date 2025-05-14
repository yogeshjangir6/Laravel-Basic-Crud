<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Post</title>
</head>
<body>
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
</body>
</html>