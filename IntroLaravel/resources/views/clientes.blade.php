
@extends('layouts.plantilla1')

  @section('contenido')

  @if(session('exito'))
        <div class="alert alert-success">
            {{ session('exito') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
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
       <!-- Formulario de eliminación -->
       <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>

        <div class="card-footer text-muted">
         <div class="d-grid gap-2 mt-2 mb-1">
          <a href="{{route('rutaupdate', $cliente->id)}}" class="btn btn-primary">{{__('Actualizar')}} </a>
             <!-- Formulario de eliminación -->
       <form action="{{ route('rutadestroy', $cliente->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>

        </div>
        </div>

    </div>
    {{-- Fin tarjetaCliente --}}
     @endforeach
     </tbody>
     </div>
  @endsection 
   