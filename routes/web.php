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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
	return view('welcome');
});

Route::resource('/articles', 'ArticleController')->only(['index'])->middleware('auth');

//Bootstrapテンプレート
Route::get('/parts/top', 'PartController@index')->name('parts.top');
Route::get('/parts/about', 'PartController@show')->name('parts.about');
