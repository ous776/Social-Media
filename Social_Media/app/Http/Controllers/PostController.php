<?php



namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Group $group)
    {
        $posts = $group->posts;

        return view('posts.index', compact('group', 'posts'));
    }

    public function create(Group $group)
    {
        return view('posts.create', compact('group'));
    }

    public function store(Request $request, Group $group)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = $group->posts()->create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('public/media');
            $post->update(['media' => $path]);
        }

        return redirect()->route('posts.show', [$group->id, $post->id]);
    }

    public function show(Group $group, Post $post)
    {
        return view('posts.show', compact('group', 'post'));
    }

    public function edit(Group $group, Post $post)
    {
        return view('posts.edit', compact('group', 'post'));
    }

    public function update(Request $request, Group $group, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('public/media');
            $post->update(['media' => $path]);
        }

        return redirect()->route('posts.show', [$group->id, $post->id]);
    }

    public function destroy(Group $group, Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index', $group->id);
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class PostController extends Controller
// {
//     public function store(Request $request, Group $group)
//     {
//         $request->validate([
//             'title' => 'required|max:255',
//             'content' => 'required',
//         ]);
    
//         if ($group->members()->where('user_id', $request->user()->id)->exists()) {
//             $post = new Post([
//                 'title' => $request->title,
//                 'content' => $request->content,
//                 'user_id' => $request->user()->id,
//                 'group_id' => $group->id,
//             ]);
//             $post->save();
    
//             return redirect()->route('posts.show', [$group->id, $post->id]);
//         } else {
//             return redirect()->back()->withErrors(['You are not a member of this group.']);
//         }
//     }

//     public function edit(Group $group, Post $post)
// {
//     return view('posts.edit', compact('group', 'post'));
// }



//     public function update(Request $request, Group $group, Post $post)
// {
//     $request->validate([
//         'title' => 'required|max:255',
//         'content' => 'required',
//     ]);

//     $post->update([
//         'title' => $request->title,
//         'content' => $request->content,
//     ]);

//     return redirect()->route('posts.show', [$group->id, $post->id]);
// }

// public function destroy(Group $group, Post $post)
// {
//     $post->delete();

//     return redirect()->route('posts.index', $group->id);
// }


// }
