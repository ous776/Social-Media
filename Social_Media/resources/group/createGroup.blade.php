
<h1>create group</h1>

<form method="POST" action="{{ route('groups.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>

    <div class="form-group">
        <label for="logo">Logo</label>
        <input type="file" class="form-control-file" id="logo" name="logo">
    </div>

    <button type="submit" class="btn btn-primary">Create Group</button>
</form>
