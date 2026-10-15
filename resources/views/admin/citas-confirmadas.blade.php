@extends('layout.AdminMain')

@section('titulo')
    CitasConfirmadas
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row aling-center">
                    <div class="col-12 col-md-6">
                        <h5>Citas Confirmadas</h5>
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
                        <th>Opc.</th>
                    </tr>
                    @foreach ($citas as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->hora }}</td>
                            <td>{{ $item->estado }}</td>
                            <td>{{ $item->servicio->nombreservicio }}</td>
                            <td>{{ $item->servicio->tiempo }} min</td>
                            <td class="text-center">
                                <form action="/administrador/citasconfirmadas/update/{{ $item->id }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-custom-deep-blue mx-1">
                                            <i class="bi-pencil"></i>
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
