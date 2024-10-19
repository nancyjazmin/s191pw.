<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorConvertidor extends Controller
{
    public function index()
    {
        return view('conversiones');
    }

    public function convertir(Request $request)
    {
        $valor = $request->input('valor');
        $de = $request->input('de');
        $a = $request->input('a');

        $factores = ['MB' => 1, 'GB' => 1024, 'TB' => 1024 * 1024];
        $resultado = ($valor * $factores[$de]) / $factores[$a];

        return $resultado;
    }
}