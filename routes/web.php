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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/index', 'HomeController@index')->name('home');
    Route::get('/posts', 'PostController@index')->name('posts.index')->middleware('permission:read posts');
    Route::get('/posts/create', 'PostController@create')->name('posts.create')->middleware('permission:write posts');
    Route::post('/posts/store', 'PostController@store')->name('posts.store')->middleware('permission:write posts');
    Route::get('/posts/edit/{id}', 'PostController@edit')->name('posts.edit')->middleware('permission:update posts');
    Route::put('/posts/update/{id}', 'PostController@update')->name('posts.update')->middleware('permission:update posts');
    Route::delete('/posts/delete/{id}', 'PostController@delete')->name('posts.delete')->middleware('permission:delete posts');
    Route::get('403',['as'=>'403','uses'=>'ErrorHandlerController@errorCode403']);
    Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);
    Route::get('405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);
});
