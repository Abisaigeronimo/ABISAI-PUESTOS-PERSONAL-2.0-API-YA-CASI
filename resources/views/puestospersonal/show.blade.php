@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Detalles del Puesto Personal</h1>

    <div class='card'>
        <div class='card-header'>
            RFC: {{ $puesto->rfc }}
        </div>
        <div class='card-body'>
            <h5 class='card-title'>Clave Puesto: {{ $puesto->clave_puesto }}</h5>
            <p class='card-text'>Horas Asignadas: {{ $puesto->horas_asignadas }}</p>
            <p class='card-text'>Fecha de Ingreso: {{ $puesto->fecha_ingreso_puesto }}</p>
            <p class='card-text'>Fecha de Término: {{ $puesto->fecha_termino_puesto }}</p>
            <p class='card-text'>Fecha de Ratificación: {{ $puesto->fecha_de_ratificacion_puesto }}</p>

            <!-- Botón para volver a la lista -->
            <a href="{{ route('puestospersonal.index') }}" class='btn btn-primary'>Volver a la lista</a>
        </div>
    </div>
</div>
@endsection