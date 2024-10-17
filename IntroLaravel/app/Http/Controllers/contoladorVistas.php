<?php

use Illuminate\Routing\Controller;

class controladorVisitas extends Controller

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    public function select(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){
        //respuesta a la petición POST
        //return 'La info del cliente llego al controlador';

        //regresamos todo lo que se envia a la petición
        //return $peticion->all();
        //return $peticion->ip();
    }
