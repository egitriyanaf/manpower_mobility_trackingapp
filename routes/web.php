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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/table')->group(function(){
    Route::get('', [App\Http\Controllers\TableController::class, 'index'])->name('table');
    Route::get('/user/json', [App\Http\Controllers\TableController::class, 'datajson_master_user'])->name('json_master_user');
    Route::get('/master_spv/json', [App\Http\Controllers\TableController::class, 'datajson_master_spv'])->name('json_master_spv');
    Route::get('/master_emp/json', [App\Http\Controllers\TableController::class, 'datajson_master_emp'])->name('json_master_emp');
});

Route::prefix('/transaction_tracking')->group(function(){
    Route::get('',[App\Http\Controllers\TransactionController::class,'index'])->name('transaction_tracking');
    Route::get('json',[App\Http\Controllers\TransactionController::class,'datajson_transaction_tracking'])->name('json_transaction_tracking');
});

Route::prefix('/dashboard')->group(function(){
    Route::get('',[App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
});



