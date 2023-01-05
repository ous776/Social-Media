

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts for {{ $group->name }}</h1>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <p>By {{ $post->user->name }}</p>
        @if ($post->media)
            <img src="{{ asset('storage/' . $post->media) }}" alt="Post media">
        @endif
        <form action="{{ route('posts.destroy', [$group->id, $post->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Post</button>
        </form>
    @endforeach
</div>
@endsection
