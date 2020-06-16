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
Route::group(['middleware' => 'api'], function() {
    //Provinsi
    Route::get('province', 'WilayahController@getAllProvince');
    Route::get('get', 'WilayahController@filterProvince');
    //Kota
    Route::get('regencies', 'WilayahController@getAllKota');
    Route::get('getkota', 'WilayahController@filterKota');
    //Distrik
    Route::get('districts', 'WilayahController@getAllDistricts');
    Route::get('getdistricts', 'WilayahController@filterDistricts');
     //Desa
     Route::get('villages', 'WilayahController@getAllVillages');
     Route::get('getvillages', 'WilayahController@filterVillages');
});
