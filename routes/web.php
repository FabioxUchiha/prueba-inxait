<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('inicio');

Route::get('contact/index', 'ContactController@index')->name('contact.index');
Route::post('contact/store', 'ContactController@store')->name('contact.store');
Route::get('contact/show', 'ContactController@show')->name('contact.show');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



