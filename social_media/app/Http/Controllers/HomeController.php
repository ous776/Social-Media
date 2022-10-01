<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
   {
 
    return view('home');
   }

   public function profile()
   {
 
    return view('profile');
   }

   public function settings()
   {
 
    return view('account_setting');
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
}
