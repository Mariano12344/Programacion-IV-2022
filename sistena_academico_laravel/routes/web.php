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
Auth::routes();

Route::apiResources([
    'alumnos' => Alumno::class,
    'docentes' => 'DocenteController',
    'materias' => 'MateriaController',
    'matriculas' => 'MatriculaController',
    'inscripciones' => 'InscripcionController',
    'notas' => 'NotaController',
]);

Route::get('/', function () {
    return view('welcome');
});