@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Editar Puesto Personal</h1>

    <form action="{{ route('puestospersonal.update', $puesto->rfc) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- RFC -->
        <div class="form-group">
            <label for="rfc">RFC:</label>
            <input type="text" name="rfc" id="rfc" class="form-control" value="{{ $puesto->rfc }}" required maxlength="13" readonly>
        </div>

        <!-- Clave Puesto -->
        <div class="form-group">
            <label for="clave_puesto">Clave Puesto:</label>
            <input type="number" name="clave_puesto" id="clave_puesto" class="form-control" value="{{ $puesto->clave_puesto }}" required>
        </div>

        <!-- Horas Asignadas -->
        <div class="form-group">
            <label for="horas_asignadas">Horas Asignadas:</label>
            <input type="number" name="horas_asignadas" id="horas_asignadas" class="form-control" value="{{ $puesto->horas_asignadas }}">
        </div>

        <!-- Fecha Ingreso -->
        <div class="form-group">
            <label for="fecha_ingreso_puesto">Fecha Ingreso:</label>
            <input type="datetime-local" name="fecha_ingreso_puesto" id="fecha_ingreso_puesto" class="form-control" value="{{ \Carbon\Carbon::parse($puesto->fecha_ingreso_puesto)->format('Y-m-d\TH:i') }}" required>
        </div>

        <!-- Fecha Término -->
        <div class="form-group">
            <label for="fecha_termino_puesto">Fecha Término:</label>
            <input type="datetime-local" name="fecha_termino_puesto" id="fecha_termino_puesto" class="form-control" value="{{ $puesto->fecha_termino_puesto ? \Carbon\Carbon::parse($puesto->fecha_termino_puesto)->format('Y-m-d\TH:i') : '' }}">
        </div>

        <!-- Fecha de Ratificación -->
        <div class="form-group">
            <label for="fecha_de_ratificacion_puesto">Fecha de Ratificación:</label>
            <input type="datetime-local" name="fecha_de_ratificacion_puesto" id="fecha_de_ratificacion_puesto" class="form-control" value="{{ $puesto->fecha_de_ratificacion_puesto ? \Carbon\Carbon::parse($puesto->fecha_de_ratificacion_puesto)->format('Y-m-d\TH:i') : '' }}">
        </div>

        <!-- Botón para actualizar -->
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>

</div>
@endsection