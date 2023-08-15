<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('plantilla');
});

Route::get('/bienvenida', function () {
    return view('bienvenida');
});

Route::get('register-new-product', [ProductController::class, 'registrer_function']);


Route::get('profile', [ProductController::class, 'registrer_profile']);