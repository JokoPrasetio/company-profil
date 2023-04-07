<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimKamiController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\KontakKamiController;
use App\Http\Controllers\ProdukKamiController;
use App\Http\Controllers\tentangKamiController;
use App\Http\Controllers\loginController;

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

Route::get('/', [homeController::class, 'index']);
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/tentangKami', tentangKamiController::class)->middleware('auth');
Route::resource('/dashboard/visiMisi', VisiMisiController::class)->middleware('auth');
Route::resource('/dashboard/produkKami', ProdukKamiController::class)->middleware('auth');
Route::resource('/dashboard/kontakKami', KontakKamiController::class)->middleware('auth');
Route::resource('/dashboard/timKami', TimKamiController::class)->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::get('/logout', [loginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');