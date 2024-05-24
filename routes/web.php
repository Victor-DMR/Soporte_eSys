<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('solicitar_soporte');
});

Auth::routes();
/* solicitar soporte */
Route::get('/solicitar_soporte', [App\Http\Controllers\HomeController::class, 'solictar_soporte'])->name('solictar_soporte');
/* rute home */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* rute soporte add edit delit */
Route::post('/agregar', [App\Http\Controllers\SoporteController::class, 'agregar'])->name('agregar');
/* rute obtener los soportes */
Route::get('/soportes', [App\Http\Controllers\SoporteController::class, 'soportes'])->name('soportes');
