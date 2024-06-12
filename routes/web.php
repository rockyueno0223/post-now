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
    //Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    //Route::resource('posts', 'PostsController', ['only' => ['store', 'destroy']]);
});
