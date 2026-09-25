<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <span class="rounded-circle bg-warning d-inline-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
        <i class="bi bi-scissors text-white fs-6"></i>
      </span>
      <span class="fw-bold text-dark">IMPERIUM</span>
      <span class="text-muted fs-6 fw-light ms-1" style="letter-spacing: 1px;">BARBERSHOP</span>
    </a>

    <!-- Botón Hamburguesa para celulares -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenido colapsable -->
    <div class="collapse navbar-collapse" id="navbarContenido">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-3 align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link active text-warning fw-bold" href="#">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServicios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu shadow-sm border-0 rounded-3 py-2" aria-labelledby="navbarDropdownServicios">
            <li><a class="dropdown-item" href="#">Corte clásico ($18)</a></li>
            <li><a class="dropdown-item" href="#">Arreglo de barba ($14)</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Paquete completo (VIP $28)</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Galería</a>
        </li>
      </ul>

      <!-- Botón Admin al final -->
      <a href="#" class="btn btn-outline-warning text-dark border-warning d-flex align-items-center justify-content-center gap-2 mt-3 mt-lg-0 ms-lg-3">
        <i class="bi bi-shield-lock-fill text-warning"></i>
        Acceso Admin
      </a>
    </div>
  </div>
</nav>