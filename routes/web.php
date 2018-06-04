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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//News
Route::group([
    'prefix'     => 'news',
    'as'         => 'news.',
], function () {
	Route::get('list', 'NewsController@index')->name('index');
	Route::get('add', 'NewsController@create')->name('add');
	Route::get('{edit}/edit', 'NewsController@edit')->name('edit');
	Route::post('store', 'NewsController@store')->name('store');
	Route::put('update/{update}', 'NewsController@update')->name('update');
	Route::any('destroy/{destroy}', 'NewsController@destroy')->name('destroy');
	Route::any('show', 'NewsController@popupData')->name('show');
});