@extends('layout')

@section('content')

<div>
    <h2>{{ $post->title }}</h2>
    <i>Visibilty : 
    @if ($post->active)
        <i class="fas fa-globe"></i> Public
    @else
        <i class="fas fa-lock"></i> Private
    @endif
    </i>

    <p>{{ $post->content }}</p>
</div>
<em>{{ $post->created_at->diffForHumans() }}</em>
<br><br>
<div>
    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="button">Edit</a>
    <a href="{{-- route('posts.destroy', ['post' => $post->id]) --}}" class="button">Delete</a>
</div>

@endsection