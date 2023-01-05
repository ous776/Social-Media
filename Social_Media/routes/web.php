<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\MessageController;
use App\Http\controllers\MenuController;


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

Route::get('/', function () {
    return view('guest.index');
});

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/menu', [MenuController::class,'store']);

Route::get('/menu',[MenuController::class,'cafetaria']);


Route::get('/',[HomeController::class,'sign_in']);

Route::get('/home',[HomeController::class,'redirect']);

Route::get('/profile',[HomeController::class,'profile']);

Route::get('/chat',[HomeController::class,'chat']);

Route::get('/friend',[HomeController::class,'friend']);

Route::get('/calender',[HomeController::class,'calender']);

Route::get('/events',[HomeController::class,'event']);

Route::get('/groups',[HomeController::class,'group']);

Route::get('/clubs',[HomeController::class,'club']);


Route::get('/news',[HomeController::class,'news']);

Route::get('/sign-up',[HomeController::class,'sign_up']);

// Route::get('/sign-in',[HomeController::class,'sign_in']);

Route::get('/create-account',[HomeController::class,'add_info']);

Route::get('/notification',[HomeController::class,'notification']);

require __DIR__.'/auth.php';

Route::get('/chat',[MessageController::class,'chat']);

// Route::get('/chat/{id}',[MessageController::class,'getMessage']);

Route::post('/sendmessage',[MessageController::class,'sendMessage']);
Route::post('/get-user-message',[MessageController::class,'getUserMessage']);
Route::post('/read-message',[MessageController::class,'readMessage']);
Route::post('/unread-message',[MessageController::class,'unreadMessage']);
Route::post('/message-media',[MessageController::class,'Mediafile']);
 Route::get('/search', [MessageController::class, 'search'] );
 



 Route::put('/groups/{group}/posts/{post}', 'PostController@update');
 Route::get('/groups/{group}/posts/{post}/edit', 'PostController@edit');
 Route::delete('/groups/{group}/posts/{post}', 'PostController@destroy');


 Route::post('/groups/{group}/add-user', 'GroupsController@addUser');
 Route::delete('/groups/{group}/delete-user/{user}', 'GroupsController@deleteUser');
 Route::get('/groups/{group}/members', 'GroupsController@members');
 Route::patch('/groups/{group}', 'GroupsController@update');
 Route::get('/groups/{group}/edit', 'GroupsController@edit');







