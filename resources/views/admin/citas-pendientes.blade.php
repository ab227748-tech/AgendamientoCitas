@extends('layout.AdminMain')

@section('titulo')
    CitasPendientes
@endsection

@section('contenido')
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif
        @if (session('warning'))
            <div class="alert alert-warning" role="alert">{{ session('warning') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="row aling-center">
                    <div class="col-12 col-md-6">
                        <h5>Citas Pendientes</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Estado</th>
                            <th>Nombre del Servicio</th>
                            <th>Tiempo de realizacion</th>
                            <th>Opc.</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($citas as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->hora }}</td>
                            <td>{{$item->estado}}</td>
                            <td>{{$item->servicio->nombreservicio}}</td>
                            <td>{{$item->servicio->tiempo}} min</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-custom-deep-blue mx-1"
                                    data-bs-toggle="modal" data-bs-target="#citaModal-{{ $item->id }}"
                                    aria-label="Decidir cita de {{ $item->nombre }}">
                                    <i class="bi-chat-dots"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @foreach ($citas as $item)
            <div class="modal fade" id="citaModal-{{ $item->id }}" tabindex="-1"
                aria-labelledby="citaModalLabel-{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <form action="{{ url('/administrador/citaspendientes/update/'.$item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="citaModalLabel-{{ $item->id }}">Resolver cita</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Qué deseas hacer con la cita de <strong>{{ $item->nombre }}</strong>?</p>
                                <p class="mb-0">Se notificará por WhatsApp al {{ $item->telefono }}.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="estatus" value="3" class="btn btn-outline-danger">
                                    Rechazar y notificar
                                </button>
                                <button type="submit" name="estatus" value="1" class="btn btn-primary">
                                    Confirmar y notificar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
