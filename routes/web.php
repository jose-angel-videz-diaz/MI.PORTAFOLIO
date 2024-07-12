<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/{any}', [FrontController::class, 'home'])->where('any', '.*');
// Route::get('/', [FrontController::class, 'home']);

Route::get('/vista-prueba' , [FrontController::class, 'prueba'])->name('vistaprueba');
