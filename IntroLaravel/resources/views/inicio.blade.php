<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    <style>
        body, html {
            height: 100%;
        }
        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>

    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">

        <h1 class="display-1"> {{__('Bienvenido Turista!')}} </h1>
        <p>{{__('Presiona el botón para iniciar...')}}</p>

        <a href="{{route('rutacacas')}}" class="btn btn-primary">{{__('Ir al Registro')}} </a>
        <a href="{{route('rutaconsulta')}}" class="btn btn-danger">{{__('Consultar Clientes')}} </a>
        {{--<a href="/formulario" class="btn btn-danger">{{__('Consultar Clientes')}}</a>--}}

    </div>

</body>
</html>