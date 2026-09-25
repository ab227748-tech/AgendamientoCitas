@extends('layout.main')

@section('titulo')
    Home
@endsection

@section('contenido')
    <div class="container-fluid col 10 justify-content-center m-0">
        <div class="row">
            <!-- Contenedor 2: Tarjeta Quote al lado de la primera -->
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <!-- Contenedor 1: Tarjeta Zenith (col-3 o col-2) -->
                            <div class="col-md-8">
                                <div class="card ">
                                    <div class="card-body">
                                        <p>Aqui ira la informacion</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contenedor 2: Tarjeta Quote al lado de la primera -->
                            <div class="col-md-4">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5>Nuestra Galeria</h5>
                                        <div id="carouselExampleIndicators" class="carousel slide">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                    data-bs-slide-to="0" class="active" aria-current="true"
                                                    aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="img/Carrusel1Barberia.png" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/Carrusel2Barberia.png" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/Carrusel3Barberia.png" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="container-fluid p-2">
                                            <i>4.9/50</i>
                                            <br>
                                            <span>+480 Clientes Satisfechos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
