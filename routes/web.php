<?php

use App\Http\Controllers\aplicacion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;
use App\Http\Controllers\dashboard; 
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

Route::get('/', [App::class, 'login'])->name("login"); 
Route::post('/autenticar', [App::class, 'loguear'])->name('autenticar');
Route::get("/registrar", [App::class, "register"])->name("crear");
Route::post("/crearUsuario", [App::class, "crear_usuario"])->name("anadir");
Route::get('/fecha', [aplicacion::class, 'fechas'])->name('agregar_fechas')->middleware('autenticado');    
Route::get('/home', [dashboard::class, 'index'])->name('Inicio_calendario');