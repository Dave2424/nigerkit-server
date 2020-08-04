<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::group([
    'middleware' => ['api'],
    'prefix' => 'auth'
], function () {

    // Route::get('verify/{token}', 'Api\ApiAuthController@verify')->name('verify');
    Route::post('register', 'Api\ApiAuthController@register');
    Route::post('login', 'Api\ApiAuthController@login');
    Route::post('logout', 'Api\ApiAuthController@logout');
    Route::post('me', 'Api\ApiAuthController@me');
    Route::post('edit-profile/{data}', 'Api\ApiAuthController@editProfile');
    Route::post('change-password/{oldPassword}', 'Api\ApiAuthController@changePassword');
});
Route::group([
    'middleware' => ['api']
], function () {
    // Profile
    Route::post('update', 'Api\ApiAccountController@update');
    // End profile

    // Route::get('test', 'Api\OpenApiController@mail');
    Route::get('get-index-data', 'Api\OpenApiController@getIndexData');
    Route::get('get-product', 'Api\OpenApiController@getProduct');
    Route::get('get-category', 'Api\OpenApiController@category');
    Route::post('search-product', 'Api\OpenApiController@searchProduct');
    Route::get('get-banner', 'Api\OpenApiController@Banners');
    Route::get('get-banner_sr', 'Api\OpenApiController@Banner_sr');
    Route::get('get-product-related-details/{slug}', 'Api\OpenApiController@relateDetails');
    Route::get('get-sku_No', 'Api\OpenApiController@sku_No');
    Route::post('address-search-places', 'Api\OpenApiController@searchPlacesByAddress');
    Route::post('vatfee', 'Api\ApiAccountController@vatFee');
    Route::post('update-password-data/{id}', 'Api\ApiAccountController@updatePasswordData');
    Route::get('get-category-product/{categoryId}', 'Api\OpenApiController@getproductByCategory');
    Route::get('all-product', 'Api\OpenApiController@allProduct');
    Route::get('product-by-category/{id}', 'Api\OpenApiController@productCategory');
    Route::post('similair-product', 'Api\OpenApiController@similairProduct');
    Route::post('add-subscriber', 'Api\OpenApiController@addSubscriber');
});

Route::group(['prefix' => 'post'], function () {

    Route::get('get-all-post', 'Post\ApiPostController@allPost');
    Route::get('get-post-details/{post_slug}', 'Post\ApiPostController@postDetails');
    Route::post('send-comment', 'Post\ApiPostController@addComment');
    // Route::get('get-post', 'Api\OpenApiController@getBlog');
    Route::get('like-post/{slug}', 'Post\ApiPostController@likePost');
});

Route::group(['prefix' => 'store'], function () {

    Route::get('/get-local-product', 'Store\mainStoreController@getLocalProduct');
    /// Main Store routes starts
    Route::get('store-get-cart', 'Store\mainStoreController@getCart');
    Route::post('store-add-to-cart', 'Store\mainStoreController@addToCart');
    Route::post('store-place-order', 'Store\mainStoreController@placeOrder');
    Route::get('store-remove-from-cart/{item_id}', 'Store\mainStoreController@removeFromCart');
    Route::post('store-calculate-delivery', 'Store\mainStoreController@storeCalculateDelivery');
    Route::get('order-list/{client_id}', 'Store\mainStoreController@orderList');
    Route::get('order-list-recent/{client_id}', 'Store\mainStoreController@orderListRecent');
    Route::get('order-detail/{identifier_id}', 'Store\mainStoreController@orderListDetails');
});
