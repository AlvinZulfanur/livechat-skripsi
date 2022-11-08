<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardHeroController;
use App\Http\Controllers\DashboardFiturController;
use App\Http\Controllers\DashboardMitraController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardStatistikController;
use App\Http\Controllers\DashboardUpdateProfileController;

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

Route::get('/', [FiturController::class, 'index']);

Route::get('/send-event', function(){
    $message = "Haloooo";
    broadcast(new \App\Events\NewMessage($message));
});

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);})->middleware('auth');

Route::get('/faq', function(){
    return view('landingpage.faq');
});
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/registrasi', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'store']);
Route::get('/dashboard/edit', [DashboardUpdateProfileController::class, 'edit']);
Route::put('/dashboard/update', [DashboardUpdateProfileController::class, 'update']);

Route::resource('/dashboard/fitur', DashboardFiturController::class);
Route::resource('/dashboard/produk', DashboardProdukController::class);
Route::resource('/dashboard/statistik', DashboardStatistikController::class);
Route::resource('/dashboard/hero', DashboardHeroController::class);
Route::resource('/dashboard/mitra', DashboardMitraController::class);
