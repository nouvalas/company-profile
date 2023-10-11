<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\KalkulatorController;
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


Route::get('/kalkulator', function()
{
    return view('kalkulator');
});

Route::post('/hasilkalkulator',[KalkulatorController::class, 'index']);

// Home
Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/portofolio',[HomeController::class, 'portofolio']);
Route::get('/article',[HomeController::class, 'article']);
Route::get('/faq',[HomeController::class, 'faq']);
Route::get('/detail{id}article',[HomeController::class, 'detailarticle']);
Route::get('/detailworkflow',[HomeController::class, 'detailworkflow']);

// Auth
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'login']);
Route::get('/logout',[LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/adminportofolio', [PortofolioController::class, 'index'])->middleware('auth');

// Portofolio 
// Route::resource('adminportofolio', PortofolioController::class)->middleware('auth');
Route::get('/adminportofolio',[PortofolioController::class, 'index'])->middleware('auth');
Route::get('/createportofolio',[PortofolioController::class, 'create'])->middleware('auth');
Route::post('/storeportofolio',[PortofolioController::class, 'store']);
Route::get('/edit{id}portofolio',[PortofolioController::class, 'edit'])->middleware('auth');
Route::post('/update{id}portofolio',[PortofolioController::class, 'update']);
Route::get('/delete{id}portofolio',[PortofolioController::class, 'destroy']);

// Article
Route::get('/adminarticle',[ArticleController::class, 'index'])->middleware('auth');
Route::get('/createarticle',[ArticleController::class, 'create'])->middleware('auth');
Route::post('/storearticle',[ArticleController::class, 'store']);
Route::get('/edit{id}article',[ArticleController::class, 'edit'])->middleware('auth');
Route::post('/update{id}article',[ArticleController::class, 'update']);
Route::get('/delete{id}article',[ArticleController::class, 'destroy']);