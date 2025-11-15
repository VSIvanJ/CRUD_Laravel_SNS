<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', function () {
    return view('Alumnos.registrar');
})->name('Alumnos.registrar');

Route::get('/actualizar', function () {
    return view('Alumnos.actualizar');
})->name('Alumnos.actualizar');

Route::get('/eliminar', function () {
    return view('Alumnos.eliminar');
})->name('Alumnos.eliminar');

Route::get('/lista', [AlumnoController::class, 'listaAlumnos'])->name('Alumnos.lista');

Route::post('/registro', [AlumnoController::class, 'registroAlumno'])->name('regA');

Route::post('/actualizar', [AlumnoController::class, 'actualizarAlumno'])->name('actA');

Route::post('/eliminar', [AlumnoController::class, 'eliminarAlumno'])->name('eliA');