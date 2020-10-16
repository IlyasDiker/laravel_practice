@extends('layout', ['title' => 'Add Post'])

@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="content">Content</label>
            <input type="text" name="content" id="content">
        </div>

        <button type="submit">Add new Post</button>
        <button type="reset">Clear</button>
    </form>
@endsection