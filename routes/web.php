<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\PostsController::class, 'index']);

    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'App\Http\Controllers\UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'App\Http\Controllers\UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'App\Http\Controllers\UsersController@followings')->name('users.followings');
        Route::get('followers', 'App\Http\Controllers\UsersController@followers')->name('users.followers');
    });

    Route::resource('users', 'App\Http\Controllers\UsersController', ['only' => ['index', 'show']]);
    Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => ['store', 'destroy']]);
});
