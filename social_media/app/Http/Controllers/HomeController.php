<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
   {
 
    return view('home');
   }

   public function sign_in()
   {
 
    return view('sign_in');
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

   public function settings()
   {
 
    return view('account_setting');
   }

   public function privacy_settings()
   {
 
    return view('privacy_setting');
   }

   public function chat()
   {
 
    return view('chat');
   }

   public function calender()
   {
 
    return view('calender');
   }

   public function gallery()
   {
 
    return view('gallery');
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
}
