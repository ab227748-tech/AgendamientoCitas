@extends('layout.ClientMain')

@section('contenido')
    <!-- Contenedor Principal -->
    <div class="login-wrapper">
        <div class="split-login-card">

            <!-- Columna Izquierda -->
            <section class="login-visual-panel">
                <div class="visual-content">
                    <div>
                        <h1 class="visual-quote-title">
                            Gestión y Excelencia en <span>Cada Corte</span>.
                        </h1>
                        <p class="visual-quote-desc">
                            Accede al sistema centralizado de agenda, control de profesionales y servicios de alta distincion
                        </p>
                    </div>

                    <div class="mt-3">
                        <img alt="Herramientas clásicas de barbería y espacio de trabajo" 
                        src="img/carrusel3Barberia.png" 
                        style="width: 100%; aspect-ratio: 4/3; object-fit: cover; border-radius: 6px; filter: grayscale(85%) contrast(90%) brightness(95%); display: block;"/>
                    </div>
                </div>
            </section>

            <!-- Columna Derecha -->
            <section class="login-form-panel">
                <div class="form-heading">
                    <h2 class="form-title">Iniciar sesión</h2>
                    <p class="form-subtitle">Ingresa tus credenciales para administrar las citas del día</p>
                </div>
                <form action="{{ url('/login/admin') }}" method="POST">
                    @csrf
                    <div class="mb-3 pb-1">
                        <label for="adminEmail" class="form-label-custom">Correo Electrónico</label>
                        <div class="input-icon-wrapper">
                            <span class="input-prefix-icon">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" name="email"
                                class="custom-input" id="adminEmail"
                                placeholder="admin@ejemplo.com"
                                autofocus>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="adminPassword" class="form-label-custom mb-0">Contraseña</label>
                            <a href="#" class="forgot-link">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="input-icon-wrapper">
                            <span class="input-prefix-icon">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" name="password"
                                class="custom-input with-toggle" id="adminPassword"
                                placeholder="••••••••••••" required autocomplete="current-password">
                            <button type="button" class="toggle-password-btn" id="togglePasswordBtn"
                                title="Mostrar/ocultar contraseña" aria-label="Mostrar u ocultar contraseña">
                                <i class="bi bi-eye" id="togglePasswordIcon"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit-login">
                        <i class="bi bi-box-arrow-in-right" style="font-size: 1.15rem;"></i>
                        <span>Iniciar Sesión</span>
                    </button>
                </form>
            </section>
        </div>
    </div>

    <!-- Script para mostrar/ocultar contraseña -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('togglePasswordBtn');
            const passwordInput = document.getElementById('adminPassword');
            const toggleIcon = document.getElementById('togglePasswordIcon');

            if (toggleBtn && passwordInput && toggleIcon) {
                toggleBtn.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    toggleIcon.classList.toggle('bi-eye', !isPassword);
                    toggleIcon.classList.toggle('bi-eye-slash', isPassword);
                });
            }
        });
    </script>
@endsection
