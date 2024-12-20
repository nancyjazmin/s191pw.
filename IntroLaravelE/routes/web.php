<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;

/*Rutas para trabajar controlador vistas*/

Route::get('/', [clienteController::class, 'home'])->name('rutainicio');

Route::resource('cliente', clienteController::class);


/*Rutas para trabajar con el controlador clienteController*/
/*Route::get('/', function () {
    return view('welcome');
});
*/

/*el primer parametro es la vista y el segundo es la ruta.
Funciona tanto la sintaxis de arriba como la de abajo*/

/* Route::view('/','inicio') ->name('rutainicio');

Route::view('/formulario','formulario')->name('rutacacas');

Route::view('/consultas','clientes')->name('rutaconsulta'); */

Route::view('/component', 'componentes');

Route::view('/component2', 'componentes2');