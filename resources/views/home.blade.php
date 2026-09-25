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
                            <!-- Contenedor 1: Información de Barbería -->
                            <div class="col-md-8">
                                <style>
                                    .text-gold { color: #dca73a !important; }
                                    .bg-gold { background-color: #dca73a !important; }
                                    .border-gold { border-color: #dca73a !important; }
                                    .bg-gold-light { background-color: rgba(220, 167, 58, 0.1) !important; }
                                    .font-serif { font-family: 'Playfair Display', Georgia, serif; }
                                    .barber-icon { font-size: 5rem; opacity: 0.2; transform: rotate(-45deg); line-height: 0.8; }
                                    .border-dashed { border-bottom-style: dashed !important; }
                                    
                                    /* Animaciones hover */
                                    .btn-hover-solid { transition: all 0.3s ease; }
                                    .btn-hover-solid:hover { transform: translateY(-3px); box-shadow: 0 6px 15px rgba(220, 167, 58, 0.4) !important; }
                                    
                                    .btn-hover-outline { transition: all 0.3s ease; }
                                    .btn-hover-outline:hover { background-color: #dca73a !important; color: #212529 !important; transform: translateY(-3px); box-shadow: 0 6px 15px rgba(220, 167, 58, 0.4) !important; }
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
                                            <span class="badge rounded-pill border border-gold bg-gold-light text-gold py-2 px-3 fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                                                <i class="bi bi-lightbulb-fill me-1"></i> EXCELENCIA & TRADICIÓN CLÁSICA
                                            </span>
                                            <i class="bi bi-scissors text-gold barber-icon mt-n2"></i>
                                        </div>

                                        <!-- Title -->
                                        <h1 class="font-serif fw-bold text-dark mb-3" style="font-size: clamp(2.5rem, 4vw, 3.5rem); line-height: 1.1; letter-spacing: -0.5px; font-family: 'Playfair Display', serif; letter-spacing: -0.01em; color: #161a23;">
                                            El Arte del Corte <br>
                                            <span class="text-gold fst-italic">Hecho Perfección.</span>
                                        </h1>

                                        <!-- Description -->
                                        <p class="text-secondary text-dark mb-4" style="line-height: 1.7; font-size: 1.05rem;">
                                            Bienvenido a <span class="text-dark fw-semibold">Imperium Barbershop</span>. Fusionamos la maestría tradicional de navaja y toalla caliente con las tendencias contemporáneas más vanguardistas. Reserva tu espacio y disfruta de una experiencia de cuidado y distinción diseñada exclusivamente para ti.
                                        </p>

                                        <!-- Buttons -->
                                        <div class="d-flex flex-wrap gap-3 mb-5">
                                            <button type="button" class="btn btn-hover-solid bg-gold text-dark fw-bold py-2 px-4 d-flex align-items-center" style="border-radius: 8px;">
                                                <i class="bi bi-calendar-event-fill me-2 fs-5"></i> AGENDAR CITA
                                            </button>
                                            <button type="button" class="btn btn-hover-outline bg-white border-2 border-gold text-gold fw-bold py-2 px-4 d-flex align-items-center" style="border-radius: 8px;">
                                                <i class="bi bi-camera me-2 fs-5"></i> Ver Trabajos
                                            </button>
                                        </div>

                                        <!-- Services Box -->
                                        <div class="table-responsive bg-white border border-secondary-subtle" style="border-radius: 8px;">
                                            <table class="table align-middle mb-0 table-hover" style="border-collapse: separate; border-spacing: 0;">
                                                <thead class="bg-white">
                                                    <tr>
                                                        <th colspan="2" class="border-bottom border-secondary-subtle py-3 px-4 fw-normal">
                                                            <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                                                <h5 class="text-dark m-0 font-serif fw-bold" style="font-size: 1.3rem;">
                                                                    <i class="bi bi-card-list text-gold me-2"></i> Nuestros Servicios Exclusivos
                                                                </h5>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Service 1 -->
                                                    <tr>
                                                        <td class="py-4 px-4 border-dashed " style="border-color: #e5e5e5 !important;">
                                                            <h6 class="fw-bold text-dark mb-1" style="font-size: 1.05rem;">Corte Clásico & Moderno</h6>
                                                            <p class="text-secondary mb-0" style="font-size: 0.95rem;">Lavado purificante, asesoría de imagen, corte a tijera/máquina y peinado final.</p>
                                                        </td>
                                                        <td class="text-end py-4 px-4 border-dashed" style="border-color: #e5e5e5 !important; white-space: nowrap; width: 1%;">
                                                            <h4 class="text-gold fw-bold mb-1 service-price">$18.00</h4>
                                                            <span class="text-secondary" style="font-size: 0.9rem;">40 min</span>
                                                        </td>
                                                    </tr>

                                                    <!-- Service 2 -->
                                                    <tr>
                                                        <td class="py-4 px-4 border-dashed" style="border-color: #e5e5e5 !important;">
                                                            <h6 class="fw-bold text-dark mb-1" style="font-size: 1.05rem;">Arreglo de Barba con Toalla Caliente</h6>
                                                            <p class="text-secondary mb-0" style="font-size: 0.95rem;">Perfilado con navaja recta tradicional, vaporizador facial y aceites nutritivos.</p>
                                                        </td>
                                                        <td class="text-end py-4 px-4 border-dashed" style="border-color: #e5e5e5 !important; white-space: nowrap; width: 1%;">
                                                            <h4 class="text-gold fw-bold mb-1 service-price">$14.00</h4>
                                                            <span class="text-secondary" style="font-size: 0.9rem;">30 min</span>
                                                        </td>
                                                    </tr>

                                                    <!-- Service 3 -->
                                                    <tr>
                                                        <td class="py-4 px-4 border-0">
                                                            <div class="d-flex align-items-center flex-wrap gap-2 mb-1">
                                                                <h6 class="fw-bold text-dark mb-0" style="font-size: 1.05rem;">Paquete Completo "Imperium VIP"</h6>
                                                                <span class="badge text-dark rounded-2 px-2 py-1 fw-bold" style="background-color: #ffc107; font-size: 0.65rem;">RECOMENDADO</span>
                                                            </div>
                                                            <p class="text-secondary mb-0" style="font-size: 0.95rem;">Corte + Perfilado de barba + Exfoliación facial + Bebida de cortesía de la casa.</p>
                                                        </td>
                                                        <td class="text-end py-4 px-4 border-0" style="white-space: nowrap; width: 1%;">
                                                            <h4 class="text-gold fw-bold mb-1 service-price">$28.00</h4>
                                                            <span class="text-secondary" style="font-size: 0.9rem;">65 min</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contenedor 2: Tarjeta Quote al lado de la primera -->
                            <div class="col-md-4">
                                <div class="card shadow">
                                    <div class="card-body">
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
                                                    <img src="Icons/Carrusel1.png" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="Icons/Carrusel2.png" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="Icons/Carrusel3.png" class="d-block w-100" alt="...">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
