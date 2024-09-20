<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;


Route::get('/', function () {
    return view('forms');
});


Route::post('/formulario/store', [FormularioController::class, 'store'])->name('formulario.store');







