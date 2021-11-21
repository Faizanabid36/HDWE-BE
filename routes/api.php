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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::post('/visitorpost', [App\Http\Controllers\VisitRequestsController::class, 'store'])->name('visitorpost');
Route::post('/rentalpost', [App\Http\Controllers\RentalRequestsController::class, 'store'])->name('rentalorpost');
Route::post('/quotepost', [App\Http\Controllers\QuotesRequestsController::class, 'store'])->name('quotepost');
Route::post('/orderpost', [App\Http\Controllers\OrdersController::class, 'store'])->name('orderpost');