<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Sirve para abrir el formulario 
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store Aqui preparo el Insert .
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtnombre'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

         //redirección enviando mensajes en session
         $usuario= $request->input('txtnombre');
         session()->flash('exito','Se guardo el usuario : '.$usuario);
 
         return to_route('rutacacas');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
