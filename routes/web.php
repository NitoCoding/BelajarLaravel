<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', [DashboardController::class,'index'])->name('index');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::prefix('/menu')->name('menu.')->group(function() {
    Route::get('/',[MenuController::class,'index'])->name('index');
    Route::get('/create',[MenuController::class,'create'])->name('create');
    Route::post('/store',[MenuController::class,'store'])->name('store');
    Route::get('/{id}/edit',[MenuController::class,'edit'])->name('edit');
    Route::post('/{id}',[MenuController::class,'update'])->name('update');
    Route::get('/{menu}',[MenuController::class,'destroy'])->name('destroy');
});
Route::resource('/transaksi', TransaksiController::class);
Route::resource('/pembayaran', PembayaranController::class);
Route::prefix('auth')->name('auth.')->group(function() {
    Route::get('login',[LoginController::class,'index'])->name('login');
    Route::post('authtentication',[LoginController::class,'authenticate'])->name('auth');
    Route::get('kick',[LoginController::class,'logout'])->name('logout');
});

