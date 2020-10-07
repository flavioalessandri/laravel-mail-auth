<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', "UnsignedController@index")->name('posts.index');
Route::get('/post/delete/{id}', 'LoggedController@destroy')->name('post.delete');
Route::get('post/create', "LoggedController@create")->name('post.create');
Route::get('post/edit/{id}', "LoggedController@edit")->name('post.edit');

Route::post('post/store', 'LoggedController@store')->name('post.store');
Route::post('post/update/{id}', 'LoggedController@update')->name('post.update');

Route::get('/post/{id}', "UnsignedController@show")->name('post.show');



Route::get('/mailable', function() {

  $user = App\User::inRandomOrder()->first();
  $post = App\Post::inRandomOrder()->first();
  $action = "DELETE";

  return new App\Mail\UserAction($user , $post , $action);


});
