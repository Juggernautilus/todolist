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


/*
Route::get('/hello', function () {
    return 'Hello, world';
});
*/



Route::get('/', 'PagesController@index');
Route::get('/TOP', 'PagesController@TOP');

Route::get('todo/check/{id}', 'TodoController@toggleBool')->name('todo/toggle');
Route::get('todo', 'TodoController@timeToDeadLine')->name('todo/timeToDeadline');


Route::get('/todo/history', 'TodoController@history')->name('history');

Route::resource('todo', 'TodoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
