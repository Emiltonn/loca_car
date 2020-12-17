<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountControler;
use App\Http\Controllers\TransactionControler;
use App\Http\Controllers\CarControler;
use App\Http\Controllers\ClientControler;

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

Route::resource('account', AccountController::class);
Route::resource('transaction', TransactionController::class);
Route::resource('car', CarController::class);
Route::resource('client', ClientController::class);
Route::view('dashboard', 'layouts.master');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
