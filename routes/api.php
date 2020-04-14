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
    'middleware' => ['api']
], function () {

//    Route::post('verify','ApiAuthController@verify');
    Route::post('register','ApiAuthController@register');
//    Route::post('login', 'ApiAuthController@login');
//    Route::post('logout', 'ApiAuthController@logout');
//    Route::post('refresh', 'ApiAuthController@refresh');
//    Route::post('me', 'ApiAuthController@me');
//    Route::post('remove-user-account', 'ApiAuthController@removeAccount');
});
Route::group([
    'middleware' => ['api']
], function () {
    Route::get('get-product', 'Api\ApiController@getProduct');

});
