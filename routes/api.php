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

Route::middleware('api')->get('/contacts', 'ContactsController@index');

Route::middleware('api')->post('/contacts', 'ContactsController@store');

Route::middleware('api')->get('/contacts/{id}', 'ContactsController@show');

Route::middleware('api')->put('/contacts/{id}', 'ContactsController@update');

Route::middleware('api')->delete('/contacts/{id}', 'ContactsController@destroy');
