
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
         <div class="d-grid gap-2 mt-2 mb-1">
          <a href="{{route('rutaedit', $cliente)}}" class="btn btn-primary">{{__('Actualizar')}} </a>
        <button type="submit" class="btn btn-success btn-sm">{{__('Eliminar')}}</button>
        </div>
        </div>

    </div>
    {{-- Fin tarjetaCliente --}}
     @endforeach

     </div>
  @endsection 
   