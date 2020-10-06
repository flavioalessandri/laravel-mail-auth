<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', "UnsignedController@index")->name('posts.index');
Route::get('posts/post/delete/{id}', 'LoggedController@destroy')->name('post.delete');
Route::get('/posts/post/{id}', "UnsignedController@show")->name('post.show');
