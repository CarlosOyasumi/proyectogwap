<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegistroController;
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

Route::view('/','home');

Route::view('/Nosotros','about')->name('about');

Route::view('/instrucciones','instruc')->name('instruc');

Route::view('/Configuracion','config')->middleware('auth')->name('config');


route::view('/login', 'auth.login')->name('login');

route::view('/registro', 'auth.registro')->name('registro');

Route::post('/login', [AuthenticatedSessionController::class,'store']);

Route::post('/registro', [RegistroController::class, 'store'])->name('registro.pros');

Route::post('/Actualizar/{id}', [RegistroController::class, 'actualizar'])->name('actualizar.pros');

Route::get('/logout',[AuthenticatedSessionController::class, 'logout'])->name('Cerrar');

