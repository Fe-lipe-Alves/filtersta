<?php

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aplicar-filtro', [HomeController::class, 'filter'])->name('filter');
Route::post('/aplicar-filtro', [HomeController::class, 'applyFilter'])->name('apply-filter');

Route::get('/obter-texto', [HomeController::class, 'getText'])->name('getText');
Route::post('/obter-texto', [HomeController::class, 'imageToText'])->name('image-to-text');
