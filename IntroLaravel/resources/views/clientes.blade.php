
@extends('layouts.plantilla1')

  @section('contenido')

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

    @foreach ($consultaClientes as $cliente)
    

    <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
           {{$cliente->nombre}}
          
        </div>

        <div class="card-body">
            <h5 class="fw-blod">{{$cliente->correo}}</h5>
            <h5 class="fw-medium">{{$cliente->telefono}}9</h5>
            <p class="card-text fw-lighter"> </p>

        </div>

        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-warning btn-sm">{{__('Actualizar')}}</button>
            <button type="submit" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>

        </div>

    </div>
    {{-- Fin tarjetaCliente --}}
     @endforeach

     </div>
  @endsection 
   