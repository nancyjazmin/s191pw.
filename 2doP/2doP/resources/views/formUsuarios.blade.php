<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/app.js'])
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

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

    <form>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo: </label>
            <input type="text" class="form-control" name="txtcorreo" >
        </div>

        <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña: </label>
            <input type="text" class="form-control" name="txtcontraseña" >
        </div>                

        <div class="mb-3">
            <label for="edad" class="form-label">Edad: </label>
            <input type="text" class="form-control" name="txtedad" >
        </div>



        <button type="" class="btn btn-danger "> Guardar Usuario</button>


</div>


</body>
</html>