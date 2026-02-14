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

Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

Route::get('/products', [App\Http\Controllers\PageController::class, 'products']);

Route::get('/pricing', [App\Http\Controllers\PageController::class, 'pricing']);

Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact']);
