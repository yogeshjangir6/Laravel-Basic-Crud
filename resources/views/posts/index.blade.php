<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Post</title>
</head>

<body>
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
</body>

</html>