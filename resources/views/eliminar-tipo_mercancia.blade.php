@extends('layout.plantilla')

@section("tituloPagina", "eliminar un registro")

@section('contenidotm')
    <div class="card">
        <h5 class="card-header">Eliminar un Tipo_Mercancia!!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>Id</th>
                    <th>Descripcion</th>
{{--                    <th>Direccion</th>--}}

                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $tmercancias->id }}</td>
                        <td>{{ $tmercancias->descripcion }}</td>
{{--                        <td>{{ $tmercancias->direccion }}</td>--}}

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('tmercancias.destroytm', $tmercancias->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("tmercancias.indextm") }}" class="btn btn-info">
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




