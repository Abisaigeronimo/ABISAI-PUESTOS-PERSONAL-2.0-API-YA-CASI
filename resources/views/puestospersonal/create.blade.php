@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Agregar Puesto Personal</h1>

    <form action="{{ route('puestospersonal.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="rfc">RFC:</label>
            <input type="text" name="rfc" id="rfc" class="form-control" required maxlength="13">
        </div>

        <div class="form-group">
            <label for="clave_puesto">Clave Puesto:</label>
            <input type="number" name="clave_puesto" id="clave_puesto" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="horas_asignadas">Horas Asignadas:</label>
            <input type="number" name="horas_asignadas" id="horas_asignadas" class="form-control">
        </div>

        <div class="form-group">
            <label for="fecha_ingreso_puesto">Fecha Ingreso:</label>
            <input type="datetime-local" name="fecha_ingreso_puesto" id="fecha_ingreso_puesto" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="fecha_termino_puesto">Fecha Término:</label>
            <input type="datetime-local" name="fecha_termino_puesto" id="fecha_termino_puesto" class="form-control">
        </div>

        <div class="form-group">
            <label for="fecha_de_ratificacion_puesto">Fecha de Ratificación:</label>
            <input type="datetime-local" name="fecha_de_ratificacion_puesto" id="fecha_de_ratificacion_puesto" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

</div>
@endsection