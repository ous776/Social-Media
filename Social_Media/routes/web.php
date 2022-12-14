<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\MessageController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/chat',[MessageController::class,'chat']);

// Route::get('/chat/{id}',[MessageController::class,'getMessage']);

Route::post('/sendmessage',[MessageController::class,'sendMessage']);
Route::post('/get-user-message',[MessageController::class,'getUserMessage']);
Route::post('/read-message',[MessageController::class,'readMessage']);
Route::post('/unread-message',[MessageController::class,'unreadMessage']);
// Route::post('/search', [MessageController::class, 'search'] );
