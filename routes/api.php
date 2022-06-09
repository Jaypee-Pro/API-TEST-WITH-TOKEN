<?php
use App\Http\Controllers\V1\ItemController;
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

// Access Token Request
Route::middleware('auth:sanctum')->group(function(){
   // api routes request
    Route::prefix('v1')->group(function(){//prefix
        Route::apiResource('item',ItemController::class);//use all those get,post,delete etc
    });
});


