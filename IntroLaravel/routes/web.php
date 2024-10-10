<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route:: view('/','inicio')->name('rutaprincipal');

Route::view('/formulario','formulario')->name( 'rutallena');

Route::view('/consultar','clientes')->name('rutacompras');

Route::view('/component','componentes')->name('rutacomponent');