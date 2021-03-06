<?php

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

Route::get('/',[\App\Http\Controllers\SiteController::class,'home']);
Route::get('/about',[\App\Http\Controllers\SiteController::class,'about']);
Route::get('/portfolio',[\App\Http\Controllers\SiteController::class,'portfolio']);
Route::get('/service',[\App\Http\Controllers\SiteController::class,'service']);
