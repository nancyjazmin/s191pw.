<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    public function home()
    {
        return view('inicio');
    }
    /*funciona para consultar*/
    public function index()
    {
        $consultaClientes= DB::table('cliente')->get();
        return view('clientes', compact('consultaClientes'));
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
            "correo"=>$request->input('txtcorreo'),
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
        $cliente =DB::table('cliente')->where('id',$id)->first();

        if (!$cliente) {
            return redirect()->route('consultaclientes')->withErros(['Cliente no encontrado']);
    }
    return view('formulario',compact('cliente'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request , string $id)
    {
       DB::table('cliente')->where('id',$id)->update( [
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "updated_at"=> now(),

    ]);
     
     session()->flash('update','Se guardo el usuario : ');

         return redirect()->route('consultaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente=DB::table('cliente')->where('id',$id)->delete();

        session()->flash('destroy','El Cliente se elimino correctamente.');
        return to_route('rutaconsulta');
    }
}
