<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller

{
    public function RegistroCliente (Request $peticion)
    {
        $usuario= $peticion->input('txtcorreo');
        session()->flash('exito','Se guardo el usuario : '.$usuario);
    }


}
