@extends('layout', ['title' => 'Post List'])


@section('content')
<h2>List of Posts</h2>

<dl>
    @forelse ($posts as $post)
    <li>
        <div style="border: 1px solid #9b4dca; border-radius: 10px; padding: 10px;">
            <a href="{{ route('posts.show', ['post' => $post->id])}}"><strong>{{ $post->title }}</strong></a>
            <p>{{ $post->content }}</p>
            <em>{{ $post->created_at->diffForHumans() }}</em>
            @if ($post->comments_count)
                <em><br>{{ $post->comments_count }} Comment</em>
            @else
                <em><br>No comments yet</em>
            @endif
            
        </div>
    </li>
    @empty
        <center><h3>Oopsie, No Post Found</h3></center>
    @endforelse
</dl>
@endsection