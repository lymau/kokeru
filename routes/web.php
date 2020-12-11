<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\CSController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LaporanController;

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

Route::get('/', function() {
    return view('pages.home');
})->name('pages.home');

// logout
Route::get('/logout', [LogoutController::class, 'store'])->name('auth.logout');

// auth
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'store']);

// manajer
Route::get('/manajer', function(){
    return view('manajer.dashboard');
})->name('manajer.dashboard');
Route::get('/manajer/ruang', [RuangController::class, 'index'])->name('manajer.ruang.index');
Route::get('/manajer/cs', [CSController::class, 'index'])->name('manajer.cs.index');
Route::get('/manajer/jadwal', [JadwalController::class, 'index'])->name('manajer.jadwal.index');
Route::post('/manajer/jadwal', [JadwalController::class, 'index'])->name('manajer.jadwal.index');

Route::resource('ruang', RuangController::class);
Route::resource('cs', CSController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('laporan', LaporanController::class);

// cs
Route::get('/cs', function(){
    return view('cs.dashboard');
})->name('cs.dashboard');
