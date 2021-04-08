<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


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

Route::get('/produtos', "App\Http\Controllers\ProdutoController@index");
Route::get('/produtos/{id}', "App\Http\Controllers\ProdutoController@show");
Route::post('/produtos/{id}', "App\Http\Controllers\ProdutoController@update");
Route::post('/produtos', "App\Http\Controllers\ProdutoController@store");
Route::delete('/produtos/{id}', "App\Http\Controllers\ProdutoController@destroy");
