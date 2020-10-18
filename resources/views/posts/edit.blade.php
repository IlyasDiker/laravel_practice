@extends('layout', ['title' => 'Edit Post'])

@section('content')
<form method="POST" action="{{route('posts.update', ['post' => $post->id])}}">
    @csrf
    @method('PUT')
    <h2>Edit Post</h2>

        <div>
            <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title ?? null) }}" required>
        </div>
        <div>
            <label for="content">Content</label>
            <input type="text" name="content" id="content" value="{{ old('content', $post->content ?? null) }}" required>
        </div>

        @if ($errors->any())
            <ul style="color:#b71c1c;">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit">Update Post</button>
        <button type="reset">Clear</button>
    </form>
@endsection