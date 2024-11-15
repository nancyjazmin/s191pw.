<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class controladorVistas extends Controller
{
    
    public function home()
    {
        return view('inicio');
    }
   
    public function select()
    {
        return view('clientes');
    }
    public function procesarCliente(validadorCliente $peticion)
    {
        //redirección enviando mensajes en session
        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario : '.$usuario);

        return to_route('rutacacas');

    }
}