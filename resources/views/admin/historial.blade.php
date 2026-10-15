@extends('layout.AdminMain')

@section('titulo')
    Historial
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row aling-center">
                    <div class="col-12 col-md-6">
                        <h5>Historial De Citas</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                        <th>Nombre del Servicio</th>
                        <th>Tiempo de realizacion</th>
                    </tr>
                    @foreach ($historial as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->hora }}</td>
                            <td>{{ $item->estado }}</td>
                            <td>{{ $item->servicio->nombreservicio }}</td>
                            <td>{{ $item->servicio->tiempo }} min</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
