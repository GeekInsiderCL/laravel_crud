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

Route::middleware('auth:api')->get('/siswa', function (Request $request) {
    return $request->siswa();
});

Route::get('/siswa', 'SiswaController@view');
Route::post('/siswa', 'SiswaController@create');
Route::put('/siswa/{id}', 'SiswaController@update');
Route::delete('/siswa/{id}', 'SiswaController@destroy');
