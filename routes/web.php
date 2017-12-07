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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/search', 'IndexController@search')->name('search');
Route::get('/tags', 'IndexController@tags')->name('tags');
Route::get('/categories', 'IndexController@categories')->name('categories');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');