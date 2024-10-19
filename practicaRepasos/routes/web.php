<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bienvenida');
});

Route:: view('/','bienvenida')->name('rutabienvenida');