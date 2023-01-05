@extends('layouts.app')

@section('content')
<h1>Create Post</h1>

<form action="{{ route('posts.store', $group->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control">{{ old('content') }}</textarea>
    </div>

    <div class="form-group">
        <label for="media">Media</label>
        <input type="file" name="media" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
@endsection
