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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('brands', 'Api\BrandControllers', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('categories', 'Api\CategoryControllers', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('descriptions', 'Api\DescriptionControllers', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('locations', 'Api\LocationControllers', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('manufactures', 'Api\ManufactureControllers', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('products', 'Api\ProductControllers', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('tranfers', 'Api\TransferControllers', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
