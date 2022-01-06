<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductMediaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/home', function () {
//    return view('welcome');
//
//});

//Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::get('product', [ProductController::class, 'index']);

//Route::get('/category', 'App\Http\Controllers\CategoryController@index');
Route::get('category', [CategoryController::class, 'index']);

//Route::get('product_media', 'App\Http\Controllers\ProductMediaController@index');
Route::get('product_media', [ProductMediaController::class, 'index']);

Route::post('product', [ProductController::class, 'create']);

Route::put('product/{id}', [ProductController::class, 'update']);

Route::delete('product/{prodId}', [ProductController::class, 'delete']);

//Route::get('add', [ProductController::class, 'add']);

