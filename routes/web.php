<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CSController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CS\ProfileController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UploadBuktiController;
use App\Http\Controllers\CS\DashboardController;

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

Route::get('/home', [LaporanController::class, 'laporan'])->name('pages.home');

// logout
Route::get('/logout', [LogoutController::class, 'store'])->name('auth.logout');

// auth
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'store']);

// halaman manajer
Route::prefix('manajer')->group(function (){
    Route::get('/', [LaporanController::class, 'manajer'])->name('manajer.dashboard');
    Route::get('/ruang', [RuangController::class, 'index'])->name('manajer.ruang.index');
    Route::get('/cs', [CSController::class, 'index'])->name('manajer.cs.index');
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('manajer.jadwal.index');
    Route::post('/jadwal', [JadwalController::class, 'index'])->name('manajer.jadwal.index');
    Route::get('/laporan', [LaporanController::class, 'indexMan'])->name('manajer.laporan.index');
    Route::post('/laporan', [LaporanController::class, 'indexMan'])->name('manajer.laporan.index');
});

Route::resource('ruang', RuangController::class);
Route::resource('cs', CSController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('laporan', LaporanController::class);

// halaman cs
Route::prefix('cs')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('cs.dashboard');
    Route::get('/{id_ruang}/upload/', [UploadBuktiController::class, 'index'])->name('cs.bukti');
    Route::post('/upload', [UploadBuktiController::class, 'store'])->name('cs.bukti.upload');
    Route::get('/profil', [CSController::class, 'index'])->name('cs.profil');
    Route::post('/profil', [CSController::class, 'update']);
});

