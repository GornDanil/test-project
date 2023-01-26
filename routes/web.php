<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', [\App\Http\Controllers\UserController::class, 'index']);

Route::view('/', 'home')->name('home');
Route::view('/registration', 'registration')->name('registration');
Route::post('/registration', [\App\Http\Controllers\UserController::class, 'registration'])->name('registration-post');
Route::view('/login', 'login')->name('login');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login-post');
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
Route::view('/new-paste', 'new-paste')->name('new-paste');

