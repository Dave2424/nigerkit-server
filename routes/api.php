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

    Route::post('verify','Api\ApiAuthController@verify');
    Route::post('register','Api\ApiAuthController@register');
    Route::post('login', 'Api\ApiAuthController@login');
    Route::post('logout', 'Api\ApiAuthController@logout');
    Route::post('me', 'Api\ApiAuthController@me');
//    Route::post('remove-user-account', 'ApiAuthController@removeAccount');
});
Route::group([
    'middleware' => ['api']
], function () {
    Route::get('get-product', 'Api\OpenApiController@getProduct');
    Route::get('get-post', 'Api\OpenApiController@getBlog');
    Route::get('get-category', 'Api\OpenApiController@category');
    Route::post('searchProduct','Api\OpenApiController@searchProduct');
    Route::get('get-banner', 'Api\OpenApiController@Banners');
    Route::get('get-banner_sr', 'Api\OpenApiController@Banner_sr');
    Route::get('get-product-related-details/{id}', 'Api\OpenApiController@relateDetails');
    Route::get('get-sku_No', 'Api\OpenApiController@sku_No');
    Route::post('address-search-places','Api\OpenApiController@searchPlacesByAddress');

});

Route::group(['prefix' => 'store'], function () {

    Route::get('/get-local-product','Store\mainStoreController@getLocalProduct');
    /// Main Store routes starts
    Route::get('store-get-cart', 'Store\mainStoreController@getCart');
    Route::post('store-add-to-cart', 'Store\mainStoreController@addToCart');
    Route::post('store-place-order', 'Store\mainStoreController@placeOrder');
    Route::get('store-remove-from-cart/{item_id}', 'Store\mainStoreController@removeFromCart');
    Route::post('store-calculate-delivery','Store\mainStoreController@storeCalculateDelivery');
//    Route::post('place-new-order', 'Store\FrontController@newMainStorePlaceOrder');
});
