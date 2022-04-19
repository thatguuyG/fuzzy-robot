<?php

use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\OrdersController;
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

Route::get('/', [TransactionsController::class, 'index']);

Route::get('customer/{customerId}', [TransactionsController::class, 'getCustRecord']);

Route::get('orders', [OrdersController::class, 'index']);
