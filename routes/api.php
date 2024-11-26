<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\CaourselItemsController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user_info', function (Request $request) {
    return $request->user();
});

Route::get('/carousel', [CaourselItemsController::class, 'index']);
Route::get('/carouselz/{id}', [CaourselItemsController::class, 'show']);
Route::post('/testarg', [CaourselItemsController::class, 'testarg']);
