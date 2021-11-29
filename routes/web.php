<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/visit_requests', [App\Http\Controllers\VisitRequestsController::class, 'index'])->name('visit_requests');
Route::get('/rental_requests', [App\Http\Controllers\RentalRequestsController::class, 'index'])->name('rental_requests');
Route::get('/quote_requests', [App\Http\Controllers\QuotesRequestsController::class, 'index'])->name('quote_requests');
Route::get('/orders', [App\Http\Controllers\OrdersController::class, 'index'])->name('orders');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
