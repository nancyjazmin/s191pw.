<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    
    public function home()
    {
        return view('inicio');
    }
    public function insert()
    {
        return view('formulario');
    }
    public function select()
    {
        return view('clientes');
    }
    public function procesarCliente(Request $peticion)
    {
        //return redirect()->route('rutacompras');
        //$id=[['usuario'=>'1'],['usuario'=>'2']];
        //return view('formulario',compact('id'));

        //redireccion enviando msj en session
        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario : '.$usuario);

        return to_route('rutacacas');

    }
}