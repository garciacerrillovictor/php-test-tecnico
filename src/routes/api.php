<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/subs', 'App\Http\Controllers\SubApiController@list');
Route::post('/subs', 'App\Http\Controllers\SubApiController@create');
Route::delete('/subs/{id}', 'App\Http\Controllers\SubApiController@delete');
