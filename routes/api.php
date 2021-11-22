<?php

use App\Http\Controllers\Api\CategoryController;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
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

// Route::get(
//     'categories',
//     [\App\Http\Controllers\Api\CategoryController::class, 'index']
// );

// Route::get(
//     'categories/{category}',
//     [\App\Http\Controllers\Api\CategoryController::class, 'show']
// );



// Route::get('santris' ,  
//     [\App\Http\Controllers\Api\SantriController::class , 'index']
// );
// Route::post('santris/buat' , 
//     [\App\Http\Controllers\Api\SantriController::class , 'store']
// );

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource(
        'categories',
        \App\Http\Controllers\Api\CategoryController::class
    );

    Route::apiResource(
        'santris',
        \App\Http\Controllers\Api\SantriController::class
    );
});
Route::post('/auth/login', [\App\Http\Controllers\Api\AuthController::class , 'login']);

Route::post('/auth/register', [\App\Http\Controllers\Api\AuthController::class , 'register']);

Route::post('/auth/logout', [\App\Http\Controllers\Api\AuthController::class , 'logout']);
