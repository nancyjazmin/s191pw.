<?php

use App\Http\Controllers\controladorConvertidor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bienvenida');
});

Route::view('/','bienvenida')->name('rutabienvenida');
Route::view('/conversiones','conversiones');
Route::post('/convertir',[controladorConvertidor::class,'convertir'])->name('rutaconversiones');

