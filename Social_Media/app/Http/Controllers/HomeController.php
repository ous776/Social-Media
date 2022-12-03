<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class HomeController extends Controller
{
    public function chat(){
        dd(Chat::with('messages')->get());
        $result['messages'] = Chat::with('messages')->get();
        return view('chat')->with($result);
    }
}
