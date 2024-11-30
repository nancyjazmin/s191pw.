
@extends('layouts.plantilla1')

  @section('contenido')

    {{-- inicia Tarjeta con formulario --}}
    <div class="container mt-5 col-md-6">
        {{--dump($id)--}}

        @if(session('exito'))
        <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
        @endif

        @session ('exito')
        <x-Alert tipo="warning"> {{$value}} </x-Alert>
        @endsession

        @session('exito')
            <script>
               Swal.fire({
                title: "Respuesta del servidor",
                text: '{{ $value }}',
                icon: "success"});
            </script>
        @endsession

        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                {{ isset($cliente) ? __('Editar Cliente') : ('Registro Clientes')}}
            </div>
            <div class="card-body text-justify">

                <form method="POST" action="{{ isset($cliente) ? route('rutaupdate', $cliente->id): route('rutaenvia')}}">
                    @csrf 
                    @if(isset($cliente))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre:')}}</label>
                        <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre',$cliente->nombre ?? '')}}">
                        <small class="text-danger fst-italic"> {{ $errors->first('txtnombre') }} </small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido:')}}</label>
                        <input type="text" class="form-control" name="txtapellido" value="{{old('txtapellido')}}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo:')}}:</label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo')}}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Teléfono:')}}</label>
                        <input type="text" class="form-control" name="txttelefono" value="{{old('txttelefono')}}">
                        <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2 mt-2 mb-1">
                            <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Cliente')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- finaliza Tarjeta con formulario --}}

  @endsection ('exito')