

<h1>edit group</h1>

<form method="POST" action="{{ route('groups.update', $group->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">S
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $group->name }}">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{ $group->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="logo">Logo</label>
        <input type="file" class="form-control-file" id="logo" name="logo">
    </div>

    <button type="submit" class="btn btn-primary">Update Group</button>
</form>
