<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/signin', 'signin')->name('signin');
    Route::post('/signup', 'signup')->name('signup');
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
