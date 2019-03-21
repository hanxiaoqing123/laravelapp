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
Route::get('/', 'PagesController@root')->name('root');
Route::get('/login','PagesController@root') -> name('login');
Route::get('/register','PagesController@root') -> name('register');
Route::get('/logout','PagesController@root') -> name('logout');
Route::any('/show', 'TestController@show');
Route::any('/hello', 'TestController@hello');

Auth::routes();

