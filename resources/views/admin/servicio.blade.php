@extends('layout.AdminMain')

@section('titulo')
    Servicio
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row aling-center">
                    <div class="col-12 col-md-6">
                        <h5>Mis servicios</h5>
                    </div>
                    <div class="col-12 col-md-6 px-0 px-md-3 d-flex justify-content-md-end">
                        <button class="btn btn-custom-yellow rounded-pill p-1" data-bs-toggle="modal"
                            data-bs-target="#AgregarModalServicio">
                            <div class="d-flex align-items-center justify-content-center rounded-circle bg-dark me-1"
                                style="width: 32px; height: 32px;">
                                <i class="fas fa-plus"></i>
                            </div>
                            <span class="me-2">Nuevo Usuario</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border-top p-0 mt-3">
            <div class="container-fluid">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nombre del servicio</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>tiempo(Min)</th>
                        <th>Opc.</th>
                    </tr>
                    @foreach ($servicios as $item)
                        <tr>
                            <td>{{ $item->nombreservicio }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>{{ $item->precio }}</td>
                            <td>{{ $item->tiempo }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-custom-deep-blue mx-1"data-bs-toggle="modal"
                                        data-bs-target="#EditarModalServicio" data-id="{{ $item->id }}">
                                        <i class="bi-pencil"></i>
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <form action="/administrador/servicio/delete/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="btn-group">
                                            <button type="submit">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>


        <!--Modal Editar Servicio-->
        <div class="modal fade" id="EditarModalServicio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <form id="formEditarServicio" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <label class="fw-semibold">Nombre del servicio</label>
                                <input type="text" minlength="3" required placeholder="nombre" id="editarnombreservicio"
                                    name="nombreservicio">
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Descripcio</label>
                                <textarea id="editardescripcion" cols="30" rows="6" required placeholder="describe el servicio"
                                    name="descripcion"></textarea>
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Precio</label>
                                <input type="number" required placeholder="00" name="precio" id="editarprecio">
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Tiempo del servicio</label>
                                <input type="text" required minlength="1" placeholder="formato minutos" name="tiempo"
                                    id="editartiempo">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!--Modal Agregar Servicio-->
        <div class="modal fade" id="AgregarModalServicio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <form action="/administrador/servicio/create" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <label class="fw-semibold">Nombre del servicio</label>
                                <input type="text" minlength="3" required placeholder="nombre"
                                    name="nombreservicio">
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Descripcio</label>
                                <textarea name="descripcion" cols="30" rows="6" required placeholder="describe el servicio"
                                    name="descripcion"></textarea>
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Precio</label>
                                <input type="number" required placeholder="00" name="precio">
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Tiempo del servicio</label>
                                <input type="text" required minlength="1" placeholder="formato minutos"
                                    name="tiempo">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    @vite('resources/js/servicio.js')
@endpush
