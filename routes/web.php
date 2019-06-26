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
    return view('main');
});

//dit is web.php. Waar we alle functies aanroepen naar de juiste file. Zodat alles goed word gebruikt


Route::get('/threads', 'ThreadsController@index')->name('threads');
Route::get('/threads/create', 'ThreadsController@create')->name('createThread');
Route::post('/threads', 'ThreadsController@store');
Route::get('/topics/create', 'ThreadsController@create')->name('createTopic');
Route::post('/topics', 'ThreadsController@store');
Route::get('/', 'ThreadsController@index')->name('thread.index');
Route::get('/thread/{id}', 'ThreadsController@show')->name('thread.show');
Route::get('/topic/{id}', 'TopicsController@show')->name('topics.show');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

