@extends('layouts.plantilla1')

@section('titulo','Componentes Blade')

@section('contenido')


    <x-Card encabezado="componente 1" titulo="titulo 1" textoBoton="Guardar"> 
        Contenido de tarjeta 1....

    </x-Card>

    <x-Card encabezado="componente 2" titulo="titulo 2" textoBoton="No Guardar"> 
        Contenido de tarjeta 2.... 
    </x-Card>

    <x-Alert tipo="danger">Rojo
    </x-Alert>
    <x-Alert tipo="warning">Amarillo
    </x-Alert>


@endsection