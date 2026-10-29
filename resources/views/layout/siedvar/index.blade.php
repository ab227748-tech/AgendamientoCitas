<div class="col-12 col-md-3 col-lg-3 mb-4 mb-md-0">
    <div class="admin-sidebar-card shadow-sm">
        <div class="admin-sidebar-header d-flex align-items-center gap-3 pb-3 mb-3">
            <div class="admin-avatar-shield">
                <i class="bi bi-shield-check"></i>
            </div>
            <div>
                <h6 class="admin-sidebar-title mb-0">Panel Administrador</h6>
            </div>
        </div>

        <!-- Menu de navegacion -->
        <nav class="admin-sidebar-nav mb-3">
            <a href="/administrador/dashboard"
                class="admin-nav-item {{ request()->is('administrador/dashboard*') ? 'active' : '' }}">
                <i class="bi bi-grid admin-nav-icon"></i>
                <span>Dashboard</span>
            </a>

            <a href="/administrador/servicio"
                class="admin-nav-item {{ request()->is('administrador/servicio*') ? 'active' : '' }}">
                <i class="bi bi-scissors admin-nav-icon"></i>
                <span>Mis servicios</span>
            </a>

            <a href="/administrador/citaspendientes"
                class="admin-nav-item {{ request()->is('administrador/citaspendientes*') ? 'active' : '' }}">
                <i class="bi bi-clipboard2-check admin-nav-icon"></i>
                <span>Citas Pendientes</span>
            </a>

            <a href="/administrador/citasconfirmadas"
                class="admin-nav-item {{ request()->is('administrador/citasconfirmadas*') ? 'active' : '' }}">
                <i class="bi bi-check-circle admin-nav-icon"></i>
                <span>Citas Confirmadas</span>
            </a>

            <a href="/administrador/historial"
                class="admin-nav-item {{ request()->is('administrador/historial*') ? 'active' : '' }}">
                <i class="bi bi-book admin-nav-icon"></i>
                <span>Historial de citas</span>
            </a>
        </nav>

        <!-- Seccion Inferior -->
        <div class="admin-sidebar-footer pt-3 mt-2">
            <div class="d-flex align-items-center gap-2 mb-1">
                <i class="bi bi-clock admin-footer-icon"></i>
                <span class="admin-footer-heading">Horario de Atención</span>
            </div>
            <div class="admin-footer-subtext ps-4 mb-2">
                <span>Lun a Sab: 9:30 - 8:30</span>
            </div>
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-geo-alt admin-footer-icon"></i>
                <span class="admin-footer-subtext">Av. central 742</span>
            </div>
        </div>
    </div>
</div>
