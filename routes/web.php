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
	
	Route::get('generateSku', 'ProductController@GenerateSku')->name('generate');
	Route::post('handle-sku','ProductController@handle_sku');

	// Order Management
	Route::get('orders', 'OrderController@index')->name('order.index');
	Route::get('get-order-list', 'OrderController@list');
	Route::get('get-trashed-order-list', 'OrderController@trashedList');
	Route::post('process-order', 'OrderController@processOrder');
	Route::post('ship-order', 'OrderController@shipOrder');
	Route::post('remove-order', 'OrderController@removeOrder');
	Route::post('restore-order', 'OrderController@restoreDelete');
	Route::post('delete-order', 'OrderController@forceDelete');
	
	// Order Management
	Route::get('review', 'ViewController@review')->name('review');

	//View Route
	Route::get('verify/{token}/{id}', 'ViewController@verify')->name('verify');
	Route::post('confirm-email/{token}/{id}', 'ProfileController@confirmEmail')->name('confirm-email');

	//Role Management//
	Route::get('roles', 'RoleController@index')->name('role.index');
	Route::get('role/new', 'RoleController@create')->name('role.create');
	Route::post('role/new', 'RoleController@store')->name('role.store');
	Route::get('role/{role_id}/edit', 'RoleController@edit')->name('role.edit');
	Route::post('role/{role_id}/update', 'RoleController@update')->name('role.update');
	Route::post('role/{role_id}/update-status', 'RoleController@updateStatus')->name('role.update_status');
	Route::post('role/{role_id}/delete', 'RoleController@destroy')->name('role.destroy');
	Route::get('role/{role_id}/edit-permissions', 'RoleController@editPermission')->name('role.edit_permission');
	Route::post('role/{role_id}/update-permissions', 'RoleController@updatePermission')->name('role.update_permission');

	//Permission Management//
	Route::get('permissions', 'PermissionController@index')->name('permission.index');
	Route::get('permission/new', 'PermissionController@create')->name('permission.create'); //Not in use
	Route::post('permission/new', 'PermissionController@store')->name('permission.store'); //Not in use
	Route::get('permission/{permission_id}/edit', 'PermissionController@edit')->name('permission.edit'); //Not in use
	Route::post('permission/{permission_id}/update', 'PermissionController@update')->name('permission.update'); //Not in use
	Route::post('permission/{permission_id}/update-status', 'PermissionController@updateStatus')->name('permission.update_status');
	Route::post('permission/{permission_id}/delete', 'PermissionController@destroy')->name('permission.destroy'); //Not in use

	//Subscriber Management//
	Route::get('subscribers', 'SubscriberController@index')->name('subscriber.index');
	Route::get('subscriber/new', 'SubscriberController@create')->name('subscriber.create');
	Route::post('subscriber/new', 'SubscriberController@store')->name('subscriber.store');
	Route::get('subscriber/{subscriber_id}/edit', 'SubscriberController@edit')->name('subscriber.edit');
	Route::post('subscriber/{subscriber_id}/update', 'SubscriberController@update')->name('subscriber.update');
	Route::post('subscriber/{subscriber_id}/update-status', 'SubscriberController@updateStatus')->name('subscriber.update_status');
	Route::post('subscriber/{subscriber_id}/delete', 'SubscriberController@destroy')->name('subscriber.destroy');

	//Post Management//
	Route::get('posts', 'PostController@index')->name('post.index');
	Route::get('post/new', 'PostController@create')->name('post.create');
	Route::post('post/new', 'PostController@store')->name('post.store');
	Route::get('post/{post_id}/edit', 'PostController@edit')->name('post.edit');
	Route::post('post/{post_id}/update', 'PostController@update')->name('post.update');
	Route::post('post/{post_id}/update-status', 'PostController@updateStatus')->name('post.update_status');
	Route::post('post/{post_id}/delete', 'PostController@destroy')->name('post.destroy');

	//Product Management//
	Route::get('products', 'ProductController@index')->name('product.index');
	Route::get('get-products', 'ProductController@list');
	Route::get('get-trashed-products', 'ProductController@trashedList');
	Route::post('stock-up-product', 'ProductController@storeProductStockUp');
	Route::post('update-product-status', 'ProductController@updateStatus');
	Route::post('remove-product', 'ProductController@removeProduct');
	Route::post('restore-product', 'ProductController@restoreDelete');
	Route::post('delete-product', 'ProductController@forceDelete');


	Route::get('product/new', 'ProductController@create')->name('product.create');
	Route::post('product/new', 'ProductController@store')->name('product.store');
	Route::get('product/{product_id}/edit', 'ProductController@edit')->name('product.edit');
	Route::post('product/{product_id}/update', 'ProductController@update')->name('product.update');

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
	Route::get('admin/new', 'AdminController@create')->name('admin.create');
	Route::post('admin/new', 'AdminController@store')->name('admin.store');
	Route::get('admin/{admin_id}/edit', 'AdminController@edit')->name('admin.edit');
	Route::post('admin/{admin_id}/update', 'AdminController@update')->name('admin.update');
	Route::post('admin/{admin_id}/update-status', 'AdminController@updateStatus')->name('admin.update_status');
	Route::post('admin/{admin_id}/delete', 'AdminController@destroy')->name('admin.destroy');
	Route::get('admin/{role_id}/edit-permissions', 'AdminController@editPermission')->name('admin.edit_permission');
	Route::post('admin/{role_id}/update-permissions', 'AdminController@updatePermission')->name('admin.update_permission');
	Route::get('admin/{role_id}/edit-roles', 'AdminController@editRole')->name('admin.edit_role');
	Route::post('admin/{role_id}/update-roles', 'AdminController@updateRole')->name('admin.update_role');
	
	// Client Management
	Route::get('clients', 'ClientController@index')->name("user.index");
	Route::get('client/new', 'ClientController@create')->name('user.create');
	Route::post('client/new', 'ClientController@store')->name('user.store');
	Route::get('client/{user_id}/edit', 'ClientController@edit')->name('user.edit');
	Route::post('client/{user_id}/update', 'ClientController@update')->name('user.update');
	Route::post('client/{user_id}/update-status', 'ClientController@updateStatus')->name('user.update_status');
	Route::post('client/{user_id}/update-email-status', 'ClientController@updateEmailStatus')->name('user.update_email_status');
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

