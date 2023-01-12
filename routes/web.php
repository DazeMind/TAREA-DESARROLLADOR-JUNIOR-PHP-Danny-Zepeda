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




Route::get('/tabla', [App\Http\Controllers\ControllerIndicador::class, 'tabla'])->name('tabla');
Route::get('/', [App\Http\Controllers\ControllerIndicador::class, 'verCrud'])->name('home');
Route::get('/grafico', [App\Http\Controllers\ControllerIndicador::class, 'verGrafico'])->name('verGrafico');
Route::post('/crearIndicador', [App\Http\Controllers\ControllerIndicador::class, 'crearIndicador'])->name('crearIndicador');
Route::post('/eliminarIndicador', [App\Http\Controllers\ControllerIndicador::class, 'eliminarIndicador'])->name('eliminarIndicador');
Route::post('/editarIndicador', [App\Http\Controllers\ControllerIndicador::class, 'editarIndicador'])->name('editarIndicador');
Route::get('/verIndicador', [App\Http\Controllers\ControllerIndicador::class, 'verIndicador'])->name('verIndicador');

