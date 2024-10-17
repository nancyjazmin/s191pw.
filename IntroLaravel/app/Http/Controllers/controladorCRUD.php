<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorCRUD extends Controllers
{
  
    public function home()
    {
        return view("inicio");
    }

    public function insert()
    {
        return view ("formulario");
    }

    public function select(Request $request)
    {
        return view("clientes");
    }

}
