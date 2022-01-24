<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PhonesController;
use App\Http\Controllers\API\BrandsController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/products/all",[PhonesController::class,'index']);
Route::get("/products/detail/{id}",[PhonesController::class,'show']);
Route::post("/products/search",[PhonesController::class,'search']);

Route::get("/brands/all",[BrandsController::class,'index']);