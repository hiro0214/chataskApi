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



// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/task', 'TaskController@index');

Route::post('/chat_init', 'MessageController@index');
Route::post('/chat_create', 'MessageController@create');

Route::post('/signup', 'UserController@signup');
Route::post('/signin', 'UserController@signin');
Route::post('/search', 'UserController@search');

Route::post('/group_list', 'GroupController@index');
Route::post('/group_create', 'GroupController@create');
