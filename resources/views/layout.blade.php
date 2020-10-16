<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <script src="https://kit.fontawesome.com/097cd24b76.js" crossorigin="anonymous"></script>
    <title>Twitter - {{ ucfirst($title ?? 'Page') }}</title>
</head>
<body>
    <div class="container">

        <div class="row">
            <a class="column button button-clear" href="{{ route('home') }}">Home</a>
            <a class="column button button-clear" href="{{ route('posts.index') }}">Posts</a>
            <a class="column button button-clear" href="{{ route('posts.create') }}">Add Post</a>
            {{-- <a class="column button button-clear" href="{{ route('home') }}"></a> --}}
        </div>   
        <br>
        @yield('content')  
    </div>
</body>
</html>