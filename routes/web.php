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

Route::get('/about', 'UserController@about')->name('about');

Route::get('/contact','UserController@contact')->name('contact');
Route::post('/contact', function () {
    echo 'Hello I worked';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
