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
Auth::routes(['verify' => true]);


//Main page
Route::namespace('Welcome')
    ->group(function(){
        Route::get('/', 'WelcomeController@index')->name('welcome');
    });

//Forum pages
Route::namespace('Forum')
    ->group(function(){
        Route::resource('forum', 'ForumController')->names('forum');

        Route::get('forum/tags/{tag}', 'TagController@show')->name('tag.show');
    });

//About page
Route::namespace('About')
    ->group(function(){
        Route::get('/about', 'AboutController@index')->name('about');
    });
