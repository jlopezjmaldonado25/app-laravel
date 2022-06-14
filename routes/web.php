<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Peliculas\PeliculaController;
use App\Http\Controllers\Autenticacion\LoginController;


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

Route::get('/', function () {
    return view('autenticacion.login');
});

// Login Admin Routes...
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

// Peliculas Admin Routes...

Route::get('/peliculas/ver/{id}', [PeliculaController::class, 'show'])->name('peliculas.ver');
Route::get('/peliculas/crear', [PeliculaController::class, 'show'])->name('peliculas.crear');
Route::get('/peliculas', [PeliculaController::class, 'index'])->name('peliculas');
Route::post('/peliculas', [PeliculaController::class, 'store']);

