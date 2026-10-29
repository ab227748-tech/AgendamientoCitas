<nav class="navbar navbar-expand-md custom-navbar sticky-top">
  <div class="container-fluid px-lg-5 px-3">
    
    <!-- Logo de marca -->
    <a href="{{ url('/') }}" class="brand-logo">
      <i class="bi bi-scissors brand-icon"></i>
      <span>IMPERIUM <small style="font-size: 0.75rem; letter-spacing: 0.2em; font-weight: 500; opacity: 0.85;">BARBERSHOP</small></span>
    </a>

    <!-- Botón Hamburguesa para celulares -->
    <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list fs-1 text-gold"></i>
    </button>

    <!-- Contenido colapsable -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarContenido">
      
      <!-- Enlaces de navegación -->
      <div class="navbar-nav mx-auto align-items-center gap-1 my-3 my-md-0">
        <a href="{{ url('/') }}" class="nav-link-custom">Inicio</a>
        
        <!-- Dropdown Servicios -->
        <div class="dropdown">
          <a class="nav-link-custom dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg" style="background-color: #1A1F2B; border-radius: 8px;">
            <li><a class="dropdown-item py-2 text-light" href="{{ url('/#servicios') }}">Corte Clásico & Moderno</a></li>
            <li><a class="dropdown-item py-2 text-light" href="{{ url('/#servicios') }}">Arreglo de Barba Tradicional</a></li>
            <li><hr class="dropdown-divider bg-secondary"></li>
            <li><a class="dropdown-item py-2 text-warning fw-semibold" href="{{ url('/#servicios') }}">Paquete Imperium VIP</a></li>
          </ul>
        </div>

        <a href="{{ url('/#galeria') }}" class="nav-link-custom">Galería</a>
      </div>

      <!-- Boton Acceso Admin -->
      <div class="text-center text-md-end">
        <a href="/login" class="btn-admin-nav">
          <i class="bi bi-shield-lock"></i>
          <span>Panel Admin</span>
        </a>
      </div>

    </div>

  </div>
</nav>

</nav>
