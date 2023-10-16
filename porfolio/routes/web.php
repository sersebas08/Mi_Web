<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('consultas', [\App\Http\Controllers\HomeController::class, 'consultas'])->name('consultas');
Route::post('create', [\App\Http\Controllers\HomeController::class, 'create'])->name('create');
