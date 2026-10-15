@extends('layout.ClientMain')

@section('titulo')
    Home
@endsection

@section('contenido')
    <div class="container-fluid p-0">
        <div class="row">
            <!-- Contenedor 2: Tarjeta Quote al lado de la primera -->
            <div class="mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <!-- Contenedor 1: Información de Barbería -->
                            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                <style>
                                    .text-gold {
                                        color: #dca73a !important;
                                    }

                                    .bg-gold {
                                        background-color: #dca73a !important;
                                    }

                                    .border-gold {
                                        border-color: #dca73a !important;
                                    }

                                    .bg-gold-light {
                                        background-color: rgba(220, 167, 58, 0.1) !important;
                                    }

                                    .font-serif {
                                        font-family: 'Playfair Display', Georgia, serif;
                                    }

                                    .barber-icon {
                                        font-size: 5rem;
                                        opacity: 0.2;
                                        transform: rotate(-45deg);
                                        line-height: 0.8;
                                    }

                                    .border-dashed {
                                        border-bottom-style: dashed !important;
                                    }

                                    /* Animaciones hover */
                                    .btn-hover-solid {
                                        transition: all 0.3s ease;
                                    }

                                    .btn-hover-solid:hover {
                                        transform: translateY(-3px);
                                        box-shadow: 0 6px 15px rgba(220, 167, 58, 0.4) !important;
                                    }

                                    .btn-hover-outline {
                                        transition: all 0.3s ease;
                                    }

                                    .btn-hover-outline:hover {
                                        background-color: #dca73a !important;
                                        color: #212529 !important;
                                        transform: translateY(-3px);
                                        box-shadow: 0 6px 15px rgba(220, 167, 58, 0.4) !important;
                                    }

                                    .service-price {
                                        color: #a17306;
                                        font-family: 'Cinzel', serif;
                                        font-weight: 700;
                                        font-size: 1.15rem;
                                    }
                                </style>
                                <div class="card border-0 h-100" style="border-radius: 12px;">
                                    <div class="card-body p-3">
                                        <!-- Header section -->
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <span
                                                class="badge rounded-pill border border-gold bg-gold-light text-gold py-2 px-3 fw-bold"
                                                style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                                <i class="bi bi-lightbulb-fill me-1"></i> EXCELENCIA & TRADICIÓN CLÁSICA
                                            </span>
                                            <i class="bi bi-scissors text-gold barber-icon mt-n2"></i>
                                        </div>

                                        <!-- Title -->
                                        <h1 class="font-serif fw-bold text-dark mb-3"
                                            style="font-size: clamp(2.5rem, 4vw, 3.5rem); line-height: 1.1; letter-spacing: -0.5px; font-family: 'Playfair Display', serif; letter-spacing: -0.01em; color: #161a23;">
                                            El Arte del Corte <br>
                                            <span class="text-gold fst-italic">Hecho Perfección.</span>
                                        </h1>

                                        <!-- Description -->
                                        <p class="text-secondary text-dark mb-4"
                                            style="line-height: 1.7; font-size: 1.05rem;">
                                            Bienvenido a <span class="text-dark fw-semibold">Imperium Barbershop</span>.
                                            Fusionamos la maestría tradicional de navaja y toalla caliente con las
                                            tendencias contemporáneas más vanguardistas. Reserva tu espacio y disfruta de
                                            una experiencia de cuidado y distinción diseñada exclusivamente para ti.
                                        </p>

                                        <!-- Buttons -->
                                        <div class="d-flex flex-wrap gap-3 mb-5">
                                            <button type="button"
                                                class="btn btn-hover-solid bg-gold text-dark fw-bold py-2 px-4 d-flex align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#AgendarModal"
                                                style="border-radius: 8px;">
                                                <i class="bi bi-calendar-event-fill me-2 fs-5"></i> AGENDAR CITA
                                            </button>
                                            <button type="button"
                                                class="btn btn-hover-outline bg-white border-2 border-gold text-gold fw-bold py-2 px-4 d-flex align-items-center"
                                                style="border-radius: 8px;">
                                                <i class="bi bi-camera me-2 fs-5"></i> Ver Trabajos
                                            </button>
                                        </div>

                                        <!-- Services Box -->
                                        <div class="table-responsive bg-white border border-secondary-subtle"
                                            style="border-radius: 8px;">
                                            <table class="table align-middle mb-0 table-hover"
                                                style="border-collapse: separate; border-spacing: 0;">
                                                <thead class="bg-white">
                                                    <tr>
                                                        <th colspan="2"
                                                            class="border-bottom border-secondary-subtle py-3 px-4 fw-normal">
                                                            <div
                                                                class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                                <h5 class="text-dark m-0 font-serif fw-bold"
                                                                    style="font-size: 1.3rem;">
                                                                    <i class="bi bi-card-list text-gold me-2"></i> Nuestros
                                                                    Servicios Exclusivos
                                                                </h5>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Service 1 -->
                                                    @foreach ($servicios as $item)
                                                        <tr>
                                                            <td class="py-4 px-4 border-dashed "
                                                                style="border-color: #e5e5e5 !important;">
                                                                <h6 class="fw-bold text-dark mb-1"
                                                                    style="font-size: 1.05rem;">
                                                                    {{$item->nombreservicio}}</h6>
                                                                <p class="text-secondary mb-0" style="font-size: 0.95rem;">{{$item->descripcion}}</p>
                                                            </td>
                                                            <td class="text-end py-4 px-4 border-dashed"
                                                                style="border-color: #e5e5e5 !important; white-space: nowrap; width: 1%;">
                                                                <h4 class="text-gold fw-bold mb-1 service-price">${{$item->precio}}.00</h4>
                                                                <span class="text-secondary" style="font-size: 0.9rem;">{{$item->tiempo}} min</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contenedor 2: Tarjeta Quote al lado de la primera -->
                            <div class="col-12 col-xl-4">
                                <div class="card shadow rounded-4">
                                    <div class="card-body">
                                        <div class="container-fluid p-2 d-flex align-items-center ">
                                            <i class="bi bi-camera  me-2 " style="color: #dca73a; font-size:25px"></i>
                                            <span>Nuestra Galeria</span>
                                        </div>
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
                                                    <img src="img/carrusel1Barberia.png" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/carrusel2Barberia.png" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/carrusel3Barberia.png" class="d-block w-100"
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
                                            <i class="bi bi-star-fill">4.9/5.0</i>
                                            <br>
                                            <span>+480 Clientes satisfechos este mes </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Modal Agendar Cita-->

        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="AgendarModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <form action="/create" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Agenda tu cita</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <label class="fw-semibold">Ingresa tu nombre</label>
                                <input type="text" minlength="3" required placeholder="Nombre" name="nombre">
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Ingresa tu numero de contacto</label>
                                <input type="string" minlength="13" maxlength="13" placeholder="000-000-0000"
                                    name="telefono" required>
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Selecciona el dia de tu visita</label>
                                <input type="date" name="fecha" required>
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Horario de visita</label>
                                <input type="time" name="hora" required>
                            </div>
                            <div class="input-group">
                                <label class="fw-semibold">Seleccione su servicio</label>
                                <select name="servicios_id" id="servicios_id">
                                    @foreach ($servicios as $item)
                                        <option value="{{$item->id}}">{{$item->nombreservicio}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Agendar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
