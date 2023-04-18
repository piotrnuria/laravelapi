<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\SmartphoneController;
use App\Http\Controllers\Api\HolaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('logout', [AuthController::class, 'logout']);

    // Route::get('productos', [ProductosController::class, 'index']);
    Route::get('/productos', [ProductosController::class, 'index']);
    Route::post('/productos', [ProductosController::class, 'store']);
    Route::get('/productos/{id}', [ProductosController::class, 'show']);
    Route::put('/productos/{id}', [ProductosController::class, 'update']);
    Route::delete('/productos/{id}', [ProductosController::class, 'destroy']);
});

// Route::resource('smartphone', 'Api/SmartphoneController');
// Route::resource('hola', 'Api/HolaController');




