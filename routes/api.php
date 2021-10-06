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

Route::group(['middleware' => 'api'], function ($router) {

    Route::post('login',[ App\Http\Controllers\API\AuthAPIController::class,'login']);
    Route::post('logout', [ App\Http\Controllers\API\AuthAPIController::class,'logout']);
    Route::post('refresh', [ App\Http\Controllers\API\AuthAPIController::class,'refresh']);
    Route::post('me', [ App\Http\Controllers\API\AuthAPIController::class,'me']);
});

Route::group(['middleware' => 'jwt.auth'], function ($router) {

    Route::resource('barang', 'API\BarangAPIController');
    Route::resource('penjualan', 'API\PenjualanAPIController');
    Route::resource('detailpenjualan', 'API\DetailPenjualanController');
    Route::resource('keranjangpembelian', 'API\KeranjangPembelianAPIController');
    // Route::resource('keranjanpembelian', 'API');
});



