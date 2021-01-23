<?php

// use Illuminate\Support\Facades\Mail;
Auth::routes();
Route::get('/', function(){return redirect(route('home'));})->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
	Route::get('/', 'ViewController@index')->name('home');
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
	Route::get('table-list', 'ViewController@tablelist')->name('table');
	Route::get('orders', 'ViewController@orders')->name('orders');
	Route::get('map', 'ViewController@map')->name('map');
	Route::get('notifications', 'ViewController@notifications')->name('notifications');
	Route::get('rtl-support', 'ViewController@support')->name('language');
	Route::get('upgrade', 'ViewController@upgrade')->name('upgrade');
	Route::get('review', 'ViewController@review')->name('review');
	Route::get('posts', 'ViewController@posts')->name('posts');
	Route::get('banners', 'ViewController@banner')->name('banner');
	Route::get('verify/{token}/{id}', 'ViewController@verify')->name('verify');
	Route::post('confirm-email/{token}/{id}', 'ProfileController@confirmEmail')->name('confirm-email');

	//Category Management
	Route::get('categories', 'CategoryController@index')->name('category.index');
	Route::get('category/new', 'CategoryController@create')->name('category.create');
	Route::post('category/new', 'CategoryController@store')->name('category.store');
	Route::get('category/{category_id}/edit', 'CategoryController@edit')->name('category.edit');
	Route::post('category/{category_id}/update', 'CategoryController@update')->name('category.update');
	Route::post('category/{category_id}/delete', 'CategoryController@destroy')->name('category.destroy');

	//Tag Management
	Route::get('tags', 'TagController@index')->name('tag.index');
	Route::get('tag/new', 'TagController@create')->name('tag.create');
	Route::post('tag/new', 'TagController@store')->name('tag.store');
	Route::get('tag/{tag_id}/edit', 'TagController@edit')->name('tag.edit');
	Route::post('tag/{tag_id}/update', 'TagController@update')->name('tag.update');
	Route::post('tag/{tag_id}/delete', 'TagController@destroy')->name('tag.destroy');

	//Banner Route//
	Route::post('banner', 'BannersController@store')->name('add-banner');
	Route::post('banner_sr', 'BannersController@store_other')->name('add-banner_sr');
	Route::post('add-phone', 'BannersController@addphone')->name('add-phone');

	// Get details
	Route::get('dashboard-details', 'HomeController@getDetails');
	Route::get('get-orderlist','HomeController@getOrderlist');

	// Admin Management
	Route::get('admins', 'AdminController@index')->name("admin.index");
	Route::get('admins/new', 'AdminController@create')->name('admin.create');
	Route::post('admins/new', 'AdminController@store')->name('admin.store');
	Route::get('admins/{admin_id}/edit', 'AdminController@edit')->name('admin.edit');
	Route::post('admins/{admin_id}/update', 'AdminController@update')->name('admin.update');
	Route::post('admins/{admin_id}/delete', 'AdminController@destroy')->name('admin.destroy');
	
	// User Management
	Route::get('users', 'UserController@index')->name("user.index");
	Route::get('users/new', 'UserController@create')->name('user.create');
	Route::post('users/new', 'UserController@store')->name('user.store');
	Route::get('users/{user_id}/edit', 'UserController@edit')->name('user.edit');
	Route::post('users/{user_id}/update', 'UserController@update')->name('user.update');
	Route::post('users/{user_id}/delete', 'UserController@destroy')->name('user.destroy');

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

