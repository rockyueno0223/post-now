<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\PostsController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'App\Http\Controllers\UsersController', ['only' => ['index', 'show']]);
    Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => ['store', 'destroy']]);
});
