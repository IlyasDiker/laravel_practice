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

<h3></h3>

<em>{{ $post->created_at->diffForHumans() }}</em>


@endsection