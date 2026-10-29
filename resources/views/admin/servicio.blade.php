@extends('layout.AdminMain')

@section('titulo')
    Servicio
@endsection

@section('contenido')
    <div class="container-fluid px-0">
        <div class="card admin-module-card overflow-hidden">
            <!-- Cabecera -->
            <div class="card-header admin-module-header d-flex flex-wrap align-items-center justify-content-between gap-3">
                <div class="d-flex align-items-center gap-2">
                    <h5 id="titulo-mis-servicios" class="admin-module-title mb-0">Mis servicios</h5>
                    <span class="badge rounded-pill badge-count-pill">{{ count($servicios) }} registrados</span>
                </div>

                <div class="d-flex align-items-center flex-wrap gap-2">
                    <div class="admin-search-wrapper">
                        <i class="bi bi-search admin-search-icon"></i>
                        <input type="search" id="buscarServicioInput" class="form-control admin-search-input"
                            placeholder="Filtrar servicios..." aria-label="Filtrar registros">
                    </div>

                    <button type="button" class="btn btn-add-service d-inline-flex align-items-center gap-2 px-3"
                        data-bs-toggle="modal" data-bs-target="#AgregarModalServicio">
                        <i class="bi bi-plus-lg"></i>
                        <span>Agregar servicio</span>
                    </button>
                </div>
            </div>

            <!-- Cuerpo de la tabla -->
            <div class="card-body p-0">
                <div class="table-responsive" tabindex="0" role="region" aria-labelledby="titulo-mis-servicios">
                    <table class="table admin-table align-middle mb-0" id="tablaServicios">
                        <thead>
                            <tr>
                                <th scope="col" class="text-uppercase">Nombre del servicio</th>
                                <th scope="col" class="text-uppercase">Descripción</th>
                                <th scope="col" class="text-uppercase text-end">Precio</th>
                                <th scope="col" class="text-uppercase text-end">Duración</th>
                                <th scope="col" class="text-uppercase text-end">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicios as $item)
                                <tr>
                                    <td class="service-name-cell">
                                        <div class="d-flex align-items-center gap-2">
                                            <span>{{ $item->nombreservicio }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="service-desc-cell">{{ $item->descripcion }}</div>
                                    </td>
                                    <td class="text-end font-mono-tabular service-price-cell">
                                        ${{ number_format((float) $item->precio, 2) }}
                                    </td>
                                    <td class="text-end font-mono-tabular">
                                        <span class="badge-duration">
                                            {{ str_contains(strtolower((string) $item->tiempo), 'min') ? $item->tiempo : $item->tiempo . ' min' }}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-inline-flex align-items-center justify-content-end gap-2">
                                            <button type="button"
                                                class="btn btn-action-square btn-action-edit d-inline-flex align-items-center justify-content-center p-0"
                                                data-bs-toggle="modal" data-bs-target="#EditarModalServicio"
                                                data-id="{{ $item->id }}"
                                                data-nombre="{{ $item->nombreservicio }}"
                                                data-descripcion="{{ $item->descripcion }}"
                                                data-precio="{{ $item->precio }}"
                                                data-tiempo="{{ $item->tiempo }}"
                                                title="Editar servicio"
                                                aria-label="Editar {{ $item->nombreservicio }}">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <form action="/administrador/servicio/delete/{{ $item->id }}" method="POST"
                                                class="d-inline-flex m-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-action-square btn-action-delete d-inline-flex align-items-center justify-content-center p-0"
                                                    title="Eliminar servicio"
                                                    aria-label="Eliminar {{ $item->nombreservicio }}">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pie de tarjeta -->
            <div class="card-footer admin-module-footer d-flex flex-wrap align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-info-circle text-gold"></i>
                    <span>Mostrando <span id="serviciosMostrados">{{ count($servicios) }}</span> de {{ count($servicios) }} servicios registrados en el sistema</span>
                </div>
            </div>
        </div>


        <!--Modal Editar Servicio-->
        <div class="modal fade" id="EditarModalServicio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="editarModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <form id="formEditarServicio" method="POST" class="w-100">
                    @method('PUT')
                    @csrf
                    <div class="modal-content border-0 shadow-lg rounded-4">
                        <div class="modal-header text-white rounded-top-4" style="background-color: #161a23;">
                            <h1 class="modal-title fs-5 font-serif text-gold" id="editarModalLabel">Editar servicio</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="mb-4">
                                <label for="editarnombreservicio" class="form-label fw-semibold">Nombre del servicio</label>
                                <input type="text" class="form-control" minlength="3" required
                                    placeholder="Ej. Corte Clásico y Moderno" id="editarnombreservicio"
                                    name="nombreservicio">
                            </div>
                            <div class="mb-4">
                                <label for="editardescripcion" class="form-label fw-semibold">Descripción</label>
                                <textarea id="editardescripcion" class="form-control" rows="4" required
                                    placeholder="Describe el servicio" name="descripcion"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="editarprecio" class="form-label fw-semibold">Precio</label>
                                    <input type="number" class="form-control" required placeholder="00"
                                        name="precio" id="editarprecio">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="editartiempo" class="form-label fw-semibold">Tiempo del servicio</label>
                                    <input type="text" class="form-control" required minlength="1"
                                        placeholder="Formato minutos" name="tiempo" id="editartiempo">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0 pt-0 px-4 pb-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn bg-gold text-dark fw-bold px-4">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!--Modal Agregar Servicio-->
        <div class="modal fade" id="AgregarModalServicio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="agregarModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <form action="/administrador/servicio/create" method="POST" class="w-100">
                    @csrf
                    <div class="modal-content border-0 shadow-lg rounded-4">
                        <div class="modal-header text-white rounded-top-4" style="background-color: #161a23;">
                            <h1 class="modal-title fs-5 font-serif text-gold" id="agregarModalLabel">Agregar servicio</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Nombre del servicio</label>
                                <input type="text" class="form-control" minlength="3" required
                                    placeholder="Ej. Corte Clásico y Moderno" name="nombreservicio">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Descripción</label>
                                <textarea class="form-control" rows="4" required
                                    placeholder="Describe el servicio" name="descripcion"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label fw-semibold">Precio</label>
                                    <input type="number" class="form-control" required placeholder="00"
                                        name="precio">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="form-label fw-semibold">Tiempo del servicio</label>
                                    <input type="text" class="form-control" required minlength="1"
                                        placeholder="Formato minutos" name="tiempo">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0 pt-0 px-4 pb-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn bg-gold text-dark fw-bold px-4">Agregar</button>
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
