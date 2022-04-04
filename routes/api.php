<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\InspectionSiteController;
use App\Http\Controllers\InspectionSectionController;
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


Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('inspections/stats', [InspectionController::class, 'stats']);

Route::apiResource('inspections', InspectionController::class)->except('destroy');

Route::apiResource('inspection-sites', InspectionSiteController::class);

Route::apiResource('inspection-sections', InspectionSectionController::class);
