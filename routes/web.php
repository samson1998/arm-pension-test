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

Route::resource('contact-us', 'ContactController');
Route::resource('blogs', 'BlogController');
Route::get('/blogs/article/{slug}', 'BlogController@read');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/homes', 'HomeController@admin')->name('homes');
