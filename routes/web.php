<?php

use App\Http\Controllers\MascotasController;
use App\Models\Mascota;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/logout',  [MascotasController::class, 'logout'])->name('logout');
Route::post('/login', [MascotasController::class, 'login'])->name('login');
Route::get('/mostrar-datos/{usuario}', [MascotasController::class, 'mostrarDatosEnVista'])->name('mostrarDatosEnVista');
Route::get('/mostrar-foto/{nick}', [MascotasController::class, 'paginaFoto'])->name('paginaFoto');


