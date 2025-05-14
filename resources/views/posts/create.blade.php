<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Create</title>
</head>
<body>
    <h1>Post Create</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
        <label for="title">Title</label><br/>
        <input type="text" name="title" id="title">
        </div>
        <div>
        <label for="body">Body:</label><br/>
        <textarea name="body" id="body" required></textarea>
        </div>
        <input type="submit" value="Save Post">
    </form>
    <br/>
    <a href="{{ route('posts.index') }}">Back to Post</a>
</body>
</html>