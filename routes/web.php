<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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
Route::post('/logout', [LogoutController::class, 'store'])->name('auth.logout');

// auth
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'store']);

// dashboard manajer
Route::get('/manajer/dashboard', function(){
    return view('manajer.dashboard');
})->name('manajer.dashboard');

// dashboard cs
Route::get('/cs/dashboard', function(){
    return view('cs.dashboard');
})->name('cs.dashboard');