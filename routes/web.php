<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
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

Route::name('login')->group(function(){
    Route::get('/', [LoginController::class, 'index']);
    Route::post('/', [LoginController::class, 'login']);
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::name('registrasi')->group(function(){
    Route::get('/registrasi', [RegistrasiController::class, 'index']);
    Route::post('/registrasi', [RegistrasiController::class, 'simpan']);
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});