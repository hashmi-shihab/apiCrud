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


Route::post('/store','StudentController@store');
Route::get('/index','StudentController@index');
Route::get('/show/{id}','StudentController@show');
Route::put('/update/{id}','StudentController@update');
Route::get('/destroy/{id}','StudentController@destroy');
Route::delete('/delete/{id}','StudentController@delete');
