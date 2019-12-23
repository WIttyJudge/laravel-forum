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

Auth::routes(['verify' => true]);

Route::namespace('Forum')
    ->group(function(){
        Route::resource('forum', 'ForumController')->names('forum');

        Route::get('forum/tags/{tag}', 'TagController@index')->name('tag.index');
    });

Route::namespace('About')
    ->group(function(){
        Route::get('/about', 'AboutController@index')->name('about');
    });
