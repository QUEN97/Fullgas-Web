<?php

use App\Http\Controllers\BuenTratoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EscuderiaController;
use App\Http\Controllers\EstacionController;
use App\Http\Controllers\LicenciaFullgas;
use App\Http\Controllers\UbicacionesController;
use App\Http\Controllers\ValesTarjetasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('ubicaciones-fullgas', [UbicacionesController::class, 'index'])->name('ubicaciones');
Route::get('/api/estaciones', [EstacionController::class, 'index']);
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
Route::get('licencia-fullgas', [LicenciaFullgas::class, 'index'])->name('licencia-fullgas');
Route::get('vales-tarjetas-fullgas', [ValesTarjetasController::class, 'index'])->name('vales-tarjetas');
Route::get('el-buen-trato-fullgas', [BuenTratoController::class, 'index'])->name('el-buen-trato');
Route::get('escuderia-fullgas', [EscuderiaController::class, 'index'])->name('escuderia');
Route::get('/politica-cookies', function () {
    return view('politica-cookies');
})->name('politica-cookies');