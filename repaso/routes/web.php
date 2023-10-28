<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\libController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [libController::class, 'metodoInicio'])->name('inicio');
Route::get('/registro', [libController::class, 'metodoRegistro'])->name('registro');

Route::post('/guardarRegistro', [libController::class, 'metodoGuardar'])->name('guardar');