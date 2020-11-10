@extends('layout')

@section('content')

<script>

</script>

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
    
    <form method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
        @csrf
        @method('DELETE')
        <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="button">Edit</a>
        <button type="submit" class="button">Delete</button>
    </form>
    <form method="POST" class ="row" action="{{-- route('comment.store', ['post' => $post->id]) --}}">
        @csrf
        <input type="text" placeholder="Write your Comment" required>
        <button type="submit" class="button">Submit</button>
    </form>
    
</div>

{{-- @extends('comments') --}}

@endsection