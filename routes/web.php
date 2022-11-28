<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\DatabaseController;

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

// PENGGUNA
Route::resource('/penyewa', PenyewaController::class);
Route::resource('/admin', AdminController::class);
Route::resource('/pemilik', PemilikController::class);
Route::resource('/kost', KostController::class);

// ACCOUNT
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [AuthController::class, 'login']);
Route::post('/auth',[AuthController::class,'store']);

// GET WILAYAH INDONESIA
Route::post('/getKota/{id}', [WilayahController::class, 'getKota']);
Route::post('/getKec/{id}', [WilayahController::class, 'getKecamatan']);

// DATABASE
Route::GET('/deleteData', [DatabaseController::class, 'index']);

