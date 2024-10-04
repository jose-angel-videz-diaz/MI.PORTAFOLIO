<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/descargar-diploma-bachiller', [FrontController::class, 'downloadDiplomaBachiller'])->name('download.diploma.bachiller');
Route::get('/descargar-acta-bachiller', [FrontController::class, 'downloadActaBachiller'])->name('download.acta.bachiller');
Route::get('/descargar-diploma-tecnico', [FrontController::class, 'downloadDiplomaTecnico'])->name('download.diploma.tecnico');
Route::get('/descargar-acta-tecnico', [FrontController::class, 'downloadActaTecnico'])->name('download.acta.tecnico');
Route::get('/descargar-certificado-aprendiz', [FrontController::class, 'downloadCertificadoAprendiz'])->name('download.certificado.aprendiz');
Route::get('/descargar-hv', [FrontController::class, 'downloadHv'])->name('download.hv');
Route::get('/ver-pdf', [FrontController::class, 'mostrarPDF'])->name('ver-pdf');



Route::get('/{any}', [FrontController::class, 'home'])->where('any', '.*');
