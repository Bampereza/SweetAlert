@extends('layout.plantilla')

@section("tituloPagina", "eliminar un registro")

@section('contenidom')
    <div class="card">
        <h5 class="card-header">Eliminar una mercancia!!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Id_tipo_mercancia</th>

                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $mercancias->codigo }}</td>
                        <td>{{ $mercancias->nombre }}</td>
                        <td>{{ $mercancias->id_tipo_mercancia }}</td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('mercancias.destroym', $mercancias->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("mercancias.indexm") }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span>Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span>Eliminar
                    </button>

                </form>
            </div>
            </p>

        </div>
    </div>

@endsection




