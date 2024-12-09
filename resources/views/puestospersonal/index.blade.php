@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>
        <i class="fas fa-user-tie"></i> Puestos Personal
    </h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('puestospersonal.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus icon-hover"></i> Agregar Puesto Personal
    </a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>RFC</th>
                <th>Clave Puesto</th>
                <th>Horas Asignadas</th>
                <th>Fecha Ingreso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($puestospersonal as $puesto)
                <tr>
                    <td>{{ $puesto->rfc }}</td>
                    <td>{{ $puesto->clave_puesto }}</td>
                    <td>{{ $puesto->horas_asignadas }}</td>
                    <td>{{ $puesto->fecha_ingreso_puesto }}</td>
                    <td>
                        <a href="{{ route('puestospersonal.show', $puesto->rfc) }}" class="btn btn-info btn-sm icon-hover">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                        <a href="{{ route('puestospersonal.edit', $puesto->rfc) }}" class="btn btn-warning btn-sm icon-hover">
                            <i class="fas fa-edit"></i> Editar
                        </a>

                        <!-- Botón para activar el modal -->
                        <button type="button" class="btn btn-danger btn-sm icon-hover" data-toggle="modal" data-target="#deleteModal{{ $puesto->rfc }}">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{ $puesto->rfc }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estás seguro de que deseas eliminar el puesto personal con RFC: {{ $puesto->rfc }}? Esta acción no se puede deshacer.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <form action="{{ route('puestospersonal.destroy', $puesto->rfc) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Mensaje al pie de la página -->
    <footer class="mt-5 text-center">
        <p>Hecho con amor por Abisai &nbsp;<i class="fas fa-heart" style="color: red;"></i></p>
    </footer>

</div>

@endsection