<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','All Post')</title>
</head>

<body>
    @if (session('success'))
        <div style="color:green">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>   
        </div>
    @endif
    <h1>Laravel CRUD Application</h1> 
    @yield('content')
    <br/>
</body>
</html>