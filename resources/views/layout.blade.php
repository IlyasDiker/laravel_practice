<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <script src="https://kit.fontawesome.com/097cd24b76.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

    <title>Twitter - {{ ucfirst($title ?? 'Page') }}</title>
    <style>
        .ajs-message{
            color: white;
            border-radius: 10px; 
        }
        .ajs-success{
            background-color: #4caf50 !important;
        }
        .ajs-error{
            background-color: #d32f2f !important;
        }
    </style>
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
        @if (session()->has('status'))
            <script>
                alertify.success('{{ session()->get('status') }}');
            </script>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <script>
                alertify.error('{{ $error }}');
            </script>
            @endforeach
        @endif

        @yield('content')  
    </div>
</body>
</html>