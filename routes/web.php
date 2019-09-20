<?php

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
    return view('welcome');
});

Route::get('post','PostController@index')->name('post.index');
Route::get('post/create','PostController@create')->name('post.create');
Route::post('post/store','PostController@store')->name('post.store');
Route::get('post/{id}/edit','PostController@edit')->name('post.edit');
Route::put('post/{id}/update','PostController@update')->name('post.update');
Route::delete('post/{id}/delete','PostController@destory')->name('post.destroy');

Route::get('comments','CommentController@index')->name('comment.index');
Route::get('comment/create','CommentController@create')->name('comment.create');
Route::post('comment/store','CommentController@store')->name('comment.store');
Route::get('comment/{id}/edit','CommentController@edit')->name('comment.edit');
Route::put('comment/{id}/update','CommentController@update')->name('comment.update');
Route::delete('comment/{id}/delete','CommentController@destroy')->name('comment.destroy');
