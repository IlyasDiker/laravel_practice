@extends('layout', ['title' => 'Add Post'])

@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <h2>New Post</h2>

        <div>
            <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label for="content">Content</label>
            <input type="text" name="content" id="content" value="{{ old('content') }}" required>
        </div>

        @if ($errors->any())
            <ul style="color:#b71c1c;">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit">Add new Post</button>
        <button type="reset">Clear</button>
    </form>
@endsection