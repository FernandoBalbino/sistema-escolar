<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('/curso', CursoController::class);
