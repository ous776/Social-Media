<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Group;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function showPosts(Group $group)
    {
        $posts = $group->posts;
    
        return view('posts.index', compact('group', 'posts'));
    }

    public function addUser(Group $group, User $user)
{
    $group->users()->attach($user->id);

    return redirect()->route('groups.show', $group->id);
}

public function deleteUser(Group $group, User $user)
{
    $group->users()->detach($user->id);

    return redirect()->route('groups.show', $group->id);
}

public function members(Group $group)
{
    $users = $group->users;

    return view('groups.members', compact('group', 'users'));
}


public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:groups|max:255',
        'description' => 'nullable',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo')->store('logos');
    } else {
        $logo = null;
    }

    $group = Group::create([
        'name' => $request->name,
        'description' => $request->description,
        'logo' => $logo,
    ]);

    return redirect()->route('groups.show', $group->id);
}


public function create()
{
    return view('groups.create');
}


public function update(Request $request, Group $group)
{
    $request->validate([
        'name' => 'required|unique:groups|max:255',
        'description' => 'nullable',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo')->store('logos');
        $group->logo = $logo;
    }

    $group->name = $request->name;
    $group->description = $request->description;
    $group->save();

    return redirect()->route('groups.show', $group->id);
}


public function edit(Group $group)
{
    return view('groups.edit', compact('group'));
}



}
