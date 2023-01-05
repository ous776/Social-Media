

<form action="{{ route('groups.add-user', $group->id) }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="user_id">User</label>
        <select name="user_id" class="form-control">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->firstname }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Add User</button>
</form>


<ul>
    @foreach ($users as $user)
        <li>{{ $user->firstname }} <form action="{{ route('groups.delete-user', [$group->id, $user->id]) }}" method="POST">
            @csrf
            @method('DELETE')
        
            <button type="submit" class="btn btn-danger">Delete User</button>
        </form>
        </li>

    @endforeach
</ul>
