<?php

use App\Http\Controllers\BimerController;
use App\Http\Controllers\FicheroController;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\RedeController;
use App\Http\Controllers\SuscripcioneController;
use App\Http\Controllers\UserController;
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
    return redirect('/login');
});

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    // Rutas protegidas que requieren autenticación y verificación

    // Ruta para acceder a la ventana de planes
    Route::resource('planes', PlaneController::class);

    // Ruta para acceder a la ventana de ficheros
    Route::resource('ficheros', FicheroController::class);

    // Prueba de creación de rutas para usuarios
    Route::resource('users', UserController::class);

    // Prueba de creación de rutas para redes
    Route::resource('redes', RedeController::class);

    // Prueba de creación de rutas para bimers
    Route::resource('bimers', BimerController::class);

    // Prueba de creación de rutas para suscripciones
    Route::resource('suscripciones', SuscripcioneController::class);
});