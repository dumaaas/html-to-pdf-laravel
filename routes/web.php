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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reports/{id}', [\App\Http\Controllers\ReportController::class, 'index'])->name('report');
Route::get('reports/header', [\App\Http\Controllers\ReportController::class, 'header'])->name('header');