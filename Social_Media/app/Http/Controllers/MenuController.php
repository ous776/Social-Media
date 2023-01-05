<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    
    public function cafetaria()
    {

        return view('cafeteria.menu');
    }


    public function store(Request $request)
{

    $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $menuItem = new Menu([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imageName,
    ]);
    $menuItem->save();

    return redirect('/menu')->with('success', 'Image added successfully!');
}

}
