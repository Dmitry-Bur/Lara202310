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
Route::get('/posts',[\App\Http\Controllers\admin\posts\IndexController::class,'index']);
Route::post('/posts',[\App\Http\Controllers\admin\posts\StoreController::class,'index']);
Route::get('/categories',[\App\Http\Controllers\admin\categories\IndexController::class,'index']);
Route::post('/categories',[\App\Http\Controllers\admin\categories\StoreController::class,'index']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
