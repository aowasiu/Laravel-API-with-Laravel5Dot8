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

//Show a headline
Route::get('Siteverify/{secret}/{response}/{remoteip}', 'NewsheadlinesController@siteVerify');

//Show a headline
Route::get('Headlines/{id}', 'NewsheadlinesController@show');

//List all headlines
Route::get('Headlines', 'NewsheadlinesController@index');

//Create a headline
Route::post('Headlines', 'NewsheadlinesController@store');

//Update a headline
Route::put('Headlines', 'NewsheadlinesController@store');

//Delete a headline
Route::delete('Headlines/{id}', 'NewsheadlinesController@destroy');
