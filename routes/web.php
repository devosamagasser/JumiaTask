<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\CustomerController::class,'index'])->name('customer');
Route::get('/users', [\App\Http\Controllers\UsersController::class,'index'])->name('users.index');
Route::post('/users', [\App\Http\Controllers\UsersController::class,'import'])->name('users.import');
Route::get('/users/download', [\App\Http\Controllers\UsersController::class,'export'])->name('users.export');
