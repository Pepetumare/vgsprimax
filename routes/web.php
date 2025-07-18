<?php
use App\Http\Controllers\ContactoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
})->name('inicio'); 

Route::get('/nosotros', function () {
    return view('layouts.nosotros');
})->name('nosotros'); // Nombre 'nosotros'

Route::get('/proyectos', function () {
    return view('layouts.proyectos');
})->name('proyectos'); 

// Esta ruta recibirá los datos del formulario vía POST
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.enviar');

Route::get('/modelos', function () {
    return view('layouts.modelos');
})->name('modelos'); 