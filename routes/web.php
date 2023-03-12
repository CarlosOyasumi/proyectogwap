<?php

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

Route::view('/Login','login')->name('login');

Route::view('/registro','registro')->name('registro');

