<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TramiteController;

Route::get('/', function () {
    return view('Tramites.Inicio');
})->name('Tramites.Inicio');

Route::get('/registro', function () {
    return view('Tramites.registrar');
})->name('Tramites.registrar');

Route::get('/consulta', function () {
    return view('Tramites.consulta');
})->name('Tramites.consulta');

// Registrar trámite
Route::post('/registro', [TramiteController::class, 'registroTramite'])->name('regT');

// Consultar trámite
Route::post('/consulta', [TramiteController::class, 'consultaTramite'])->name('conT');