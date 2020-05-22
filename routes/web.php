<?php

use Illuminate\Support\Facades\Mail;

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

// Route::get('send_test_email', function(){
// 	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
// 	{
// 		$message->to('david.ifeanyi84@gmail.com');
// 	});
// });
Route::get('/', function () {
    return redirect()->route('home');
});
Auth::routes();


//Review Route//

//product Route//
Route::get('product', 'ProductController@index')->name('product');
Route::post('add-product', 'ProductController@store')->name('add-product');
Route::get('/get-product', 'ProductController@allProduct');
Route::post('/edit-product', 'ProductController@update');
Route::get('/delete-product/{id}', 'ProductController@destroy');
Route::get('generateSku', 'ProductController@GenerateSku')->name('generate');
Route::post('/handle-sku','ProductController@handle_sku');

//Post Route//
Route::post('add-post','PostController@store')->name('add-post');
Route::get('view-post','PostController@show')->name('viewPost');
Route::get('/get-posts','PostController@allPosts');
Route::get('/delete-post/{id}', 'PostController@destroy');
Route::get('/edit-post/{id}','PostController@edit')->name('edit-post');
Route::post('edit-post','PostController@update')->name('update-post');

//View Route//
Route::get('/home', 'ViewController@index')->name('home');
Route::get('table-list', 'ViewController@tablelist')->name('table');
Route::get('icons', 'ViewController@allIcons')->name('icons');
Route::get('map', 'ViewController@map')->name('map');
Route::get('notifications', 'ViewController@notifications')->name('notifications');
Route::get('rtl-support', 'ViewController@support')->name('language');
Route::get('upgrade', 'ViewController@upgrade')->name('upgrade');
Route::get('review', 'ViewController@review')->name('review');
Route::get('posts', 'ViewController@posts')->name('posts');
Route::get('banners', 'ViewController@banner')->name('banner');

//Category Route//
Route::get('category', 'CategoryController@index')->name('category');
Route::post('/addCategory', 'CategoryController@store');
Route::post('/updateCategory', 'CategoryController@update');
Route::get('/deleteCategory/{id}', 'CategoryController@destroy');

//Banner Route//
Route::post('banner', 'BannersController@store')->name('add-banner');
Route::post('banner_sr', 'BannersController@store_other')->name('add-banner_sr');


Route::group(['middleware' => ['auth:admin']], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

