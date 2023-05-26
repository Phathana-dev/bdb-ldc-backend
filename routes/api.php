<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\SectorResource;
use App\Http\Controllers\Api\Test\SectorController;
use App\Http\Controllers\Api\Test\EmployeeController;
use App\Http\Controllers\Api\Test\ShiftTimeController;



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

## Sector API - Get All data and single data
Route::get($prefix.'/sector',[SectorController::class,'getSector']);
Route::get($prefix.'/sector/{id}',[SectorController::class,'getSectorById']);
Route::get($prefix.'/sectoremp',[SectorController::class,'getSectorWithEmp']);
Route::get($prefix.'/sectoremp/{id}',[SectorController::class,'getSectorByIdWithEmp']);



## Employee API
Route::get($prefix.'/emp',[EmployeeController::class,'getEmployee']);



## ShiftTime data
Route::get($prefix.'/shifttime',[ShiftTimeController::class,'getShiftTime']);
Route::post($prefix.'/shifttime/search',[ShiftTimeController::class,'searchShiftTime']);
