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
 Route::get('get-user-items/{id}', [\App\Http\Controllers\TestController::class, 'show']);
 Route::post('save-new-item', [\App\Http\Controllers\TestController::class, 'store']);
 Route::post('update-user-item/{id}', [\App\Http\Controllers\TestController::class, 'update_user_item']);

