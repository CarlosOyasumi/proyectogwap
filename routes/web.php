<?php

use App\Http\Controllers\Admin\Filecontroller;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Filecontroller as ControllersFilecontroller;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\respuestasjuegoController;
use App\Http\Controllers\Visorimagenes;
use Illuminate\Support\Facades\Route;

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

Route::view('/','home')->name('home');

Route::view('/Nosotros','about')->name('about');

Route::view('/instrucciones','instruc')->name('instruc');

Route::view('/Configuracion','config')->middleware('auth')->name('config');

Route::view('/Configuracion/Admin/Agregar','auth.agregarimg')->middleware('auth')->name('agregar');


route::get('/configuracion/Admin/Galeria', [Visorimagenes::class, 'index'])->middleware('auth')->name('Viewcontrollerimg');

route::get('/play', [Visorimagenes::class, 'play'])->middleware('auth')->name('play');

route::get('/puntuaciones', [Visorimagenes::class, 'puntuaciones'])->middleware('auth')->name('puntuaciones');


route::view('/login', 'auth.login')->name('login');

route::view('/registro', 'auth.registro')->name('registro');

Route::post('/login', [AuthenticatedSessionController::class,'store']);

Route::post('/registro', [RegistroController::class, 'store'])->name('registro.pros');

Route::post('/Configuracion/admin/agregar', [ControllersFilecontroller::class, 'store'])->name('Agregarimagen');

Route::post('/Actualizar/{id}', [RegistroController::class, 'actualizar'])->middleware('auth')->name('actualizar.pros');

Route::get('/logout',[AuthenticatedSessionController::class, 'logout'])->name('Cerrar');

Route::middleware(['web'])->group(function () {
    Route::post('/act', [respuestasjuegoController::class, 'store'])->name('subir_resp');
});


