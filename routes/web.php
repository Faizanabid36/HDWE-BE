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

Auth::routes(['register' => false]);
Route::get('/screendetails', [App\Http\Controllers\VisitRequestsController::class, 'index'])->name('screen');
Route::get('/rentaldetails', [App\Http\Controllers\RentalRequestsController::class, 'index'])->name('rental');
Route::get('/quotedetails', [App\Http\Controllers\QuotesRequestsController::class, 'index'])->name('quote');
Route::get('/orderdetails', [App\Http\Controllers\OrdersController::class, 'index'])->name('order');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
