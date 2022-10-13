<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/',[HomeController::class,'home']);

Route::get('/profile',[HomeController::class,'profile']);

Route::get('/chat',[HomeController::class,'chat']);

Route::get('/friend',[HomeController::class,'friend']);

Route::get('/calender',[HomeController::class,'calender']);

Route::get('/events',[HomeController::class,'event']);

Route::get('/groups',[HomeController::class,'group']);

Route::get('/clubs',[HomeController::class,'club']);

Route::get('/file',[HomeController::class,'file']);

Route::get('/gallery',[HomeController::class,'gallery']);

Route::get('/account-setting',[HomeController::class,'settings']);

Route::get('/privacy-setting',[HomeController::class,'privacy_settings']);

Route::get('/news',[HomeController::class,'news']);

Route::get('/sign-up',[HomeController::class,'sign_up']);

Route::get('/sign-in',[HomeController::class,'sign_in']);

Route::get('/notification',[HomeController::class,'notification']);

