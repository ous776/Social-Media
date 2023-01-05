<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\Auth;
use Illuminate\Http\Request;
use App\Models\Chat;

class HomeController extends Controller
{

    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->role == 'Cafetaria') {

                return view('cafeteria.index');
            } else 
            {
                return view('home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function home()
    {

        return view('home');
    }

    public function sign_in()
    {

        return view('auth.login');
    }

    public function sign_up()
    {

        return view('signup');
    }

    public function add_info()
    {

        return view('addinfo');
    }

    public function profile()
    {

        return view('profile');
    }

    public function group()
    {

        return view('group');
    }

    public function file()
    {

        return view('file');
    }

    public function news()
    {

        return view('news');
    }

    public function event()
    {

        return view('event');
    }

    public function notification()
    {

        return view('notification');
    }

    public function friend()
    {

        return view('friend');
    }


    public function chat()
    {
        dd(Chat::with('messages')->get());
        $result['messages'] = Chat::with('messages')->get();
        return view('chat')->with($result);
    }
}
