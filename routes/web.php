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

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//Review Route//
//product Route//

//View Route//
Route::get('/home', 'ViewController@index')->name('home');
Route::get('table-list', 'ViewController@tablelist')->name('table');
Route::get('icons', 'ViewController@allIcons')->name('icons');
Route::get('map', 'ViewController@map')->name('map');
Route::get('notifications', 'ViewController@notifications')->name('notifications');
Route::get('rtl-support', 'ViewController@support')->name('language');
Route::get('upgrade', 'ViewController@upgrade')->name('upgrade');
Route::get('review', 'ViewController@review')->name('review');
Route::get('product', 'ViewController@product')->name('product');

//Category Route//
Route::get('category', 'CategoryController@index')->name('category');
Route::post('/addCategory', 'CategoryController@store');
Route::post('/updateCategory', 'CategoryController@update');
Route::get('/deleteCategory/{id}', 'CategoryController@destroy');

//User Route//


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
