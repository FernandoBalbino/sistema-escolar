<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RotaController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/rotas', [RotaController::class, 'index']);
