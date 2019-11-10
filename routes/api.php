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

Route::get('list', 'ApiController@list');

Route::post('create', 'ApiController@create');

Route::get('detail/{id}', 'ApiController@detail');

Route::put('update/{id}', 'ApiController@update');

Route::delete('delete/{id}', 'ApiController@delete');