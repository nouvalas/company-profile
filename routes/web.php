<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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

// Home
Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/portofolio',[HomeController::class, 'portofolio']);
Route::get('/article',[HomeController::class, 'article']);
Route::get('/faq',[HomeController::class, 'faq']);



// Auth
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'login']);
Route::get('/logout',[LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');