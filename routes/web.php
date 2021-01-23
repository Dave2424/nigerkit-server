<?php

// use Illuminate\Support\Facades\Mail;
Auth::routes();
Route::get('/', function(){return redirect(route('home'));});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
	Route::get('/', 'ViewController@index')->name('home');

	//Banner Route//
	Route::post('banner', 'BannersController@store')->name('add-banner');
	Route::post('banner_sr', 'BannersController@store_other')->name('add-banner_sr');
	Route::post('add-phone', 'BannersController@addphone')->name('add-phone');

	// Get details
	Route::get('dashboard-details', 'HomeController@getDetails');
	Route::get('get-orderlist','HomeController@getOrderlist');

	//Product Management//
	Route::get('products', 'ProductController@index')->name('product.index');
	Route::get('product/new', 'ProductController@create')->name('product.create');
	Route::post('product/new', 'ProductController@store')->name('product.store');
	Route::get('product/{product_id}/edit', 'ProductController@edit')->name('product.edit');
	Route::post('product/{product_id}/update', 'ProductController@update')->name('product.update');
	Route::post('product/{product_id}/update-status', 'ProductController@updateStatus')->name('product.update_status');
	Route::post('product/{product_id}/delete', 'ProductController@destroy')->name('product.destroy');
	
	Route::get('generateSku', 'ProductController@GenerateSku')->name('generate');
	Route::post('/handle-sku','ProductController@handle_sku');

	//Post Route//
	Route::post('add-post','PostController@store')->name('add-post');
	Route::get('view-post','PostController@show')->name('viewPost');
	Route::get('/get-posts','PostController@allPosts');
	Route::get('/delete-post/{id}', 'PostController@destroy');
	Route::get('/edit-post/{id}','PostController@edit')->name('edit-post');
	Route::post('edit-post','PostController@update')->name('update-post');

	// Order Management
	Route::get('orders', 'ViewController@orders')->name('order.index');

	// Posts Management
	Route::get('posts', 'ViewController@posts')->name('post.index');

	//View Route//
	Route::get('table-list', 'ViewController@tablelist')->name('table');
	Route::get('map', 'ViewController@map')->name('map');
	Route::get('notifications', 'ViewController@notifications')->name('notifications');
	Route::get('rtl-support', 'ViewController@support')->name('language');
	Route::get('upgrade', 'ViewController@upgrade')->name('upgrade');
	Route::get('review', 'ViewController@review')->name('review');
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

	// Admin Management
	Route::get('admins', 'AdminController@index')->name("admin.index");
	Route::get('admins/new', 'AdminController@create')->name('admin.create');
	Route::post('admins/new', 'AdminController@store')->name('admin.store');
	Route::get('admins/{admin_id}/edit', 'AdminController@edit')->name('admin.edit');
	Route::post('admins/{admin_id}/update', 'AdminController@update')->name('admin.update');
	Route::post('admins/{admin_id}/update-status', 'AdminController@updateStatus')->name('admin.update_status');
	Route::post('admins/{admin_id}/delete', 'AdminController@destroy')->name('admin.destroy');
	
	// Client Management
	Route::get('clients', 'ClientController@index')->name("user.index");
	Route::get('client/new', 'ClientController@create')->name('user.create');
	Route::post('client/new', 'ClientController@store')->name('user.store');
	Route::get('client/{user_id}/edit', 'ClientController@edit')->name('user.edit');
	Route::post('client/{user_id}/update', 'ClientController@update')->name('user.update');
	Route::post('client/{user_id}/update-status', 'ClientController@updateStatus')->name('user.update_status');
	Route::post('client/{user_id}/delete', 'ClientController@destroy')->name('user.destroy');

	// Banner Management
	Route::get('banner-manager', 'ViewController@banner')->name('banner');
	Route::get('banners', 'BannersController@index')->name("banner.index");
	Route::get('banner/new', 'BannersController@create')->name('banner.create');
	Route::post('banner/new', 'BannersController@store')->name('banner.store');
	Route::get('banner/{banner_id}/edit', 'BannersController@edit')->name('banner.edit');
	Route::post('banner/{banner_id}/update', 'BannersController@update')->name('banner.update');
	Route::post('banner/{banner_id}/update-status', 'BannersController@updateStatus')->name('banner.update_status');
	Route::post('banner/{banner_id}/delete', 'BannersController@destroy')->name('banner.destroy');

	// Settings Management
	Route::get('settings', 'SettingController@index')->name("settings.index");
	Route::post('settings', 'SettingController@update')->name('settings.update');
	
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

