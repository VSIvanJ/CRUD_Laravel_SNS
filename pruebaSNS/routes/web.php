<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PedidoController;

/*Route::get('/', function () {
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
Route::post('/consulta', [TramiteController::class, 'consultaTramite'])->name('conT');*/

/* <=======================================================================================> */

Route::get('/', function () {
    return view('Menus.inicio');
})->name('Menus.inicio');

Route::get('/registro', function () {
    return view('Menus.registrar');
})->name('Menus.registrar');

// Registrar menu
Route::post('/registro', [MenuController::class, 'registroMenu'])->name('regM');

Route::get('/lista', [MenuController::class, 'mostrarLista'])->name('Menus.lista');

/* <=======================================================================================> */

Route::get('/pedido', function () {
    return view('Pedidos.inicio');
})->name('Pedidos.inicio');

Route::get('/pedido/registro', function () {
    return view('Pedidos.registrar');
})->name('Pedidos.registrar');

// Registrar pedido
Route::post('/pedido/registro', [PedidoController::class, 'registroPedido'])->name('regP');

Route::get('/pedido/lista', [PedidoController::class, 'mostrarLista'])->name('Pedidos.lista');