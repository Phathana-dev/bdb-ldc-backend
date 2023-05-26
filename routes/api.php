<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\SectorResource;
use App\Http\Controllers\Api\Test\SectorController;
use App\Http\Controllers\Api\Test\EmployeeController;


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



// api/test
// Route::group(['prefix'=>'test', 'namespace'=>'App\Http\Controllers\Api\Test'], function(){
//     Route::apiResource('sector',SectorController::class);
//     Route::apiResource('employee', EmployeeController::class);
// });

$prefix = 'test';
Route::get('/'.$prefix.'/sector',[SectorController::class,'index']);
Route::get('/'.$prefix.'/sector/{id}',[SectorController::class,'findSectorByID']);


Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers\Api\Test'], function(){
    Route::apiResource('sector',SectorController::class);
});

