<div class="col-12 col-md-4 col-lg-3 mb-4 mb-md-0">
    <div class="card shadow">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <img src="{{ asset('img/Perfil.png') }}" width="45" height="45" class="rounded-circle me-2"
                    alt="Perfil">
                <span class="fw-semibold">Panel de Administrador</span>
            </div>
        </div>
        <div class="card-body p-4">
            <div class="list-group list-group-flush">
                <a href="/administrador/dashboard">
                    <button type="button"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2 py-3">
                        <i class="bi bi-person-fill text-warning"></i> Dashboard
                    </button>
                </a>
                <a href="/administrador/servicio">
                    <button type="button"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2 py-3">
                        <i class="bi bi-calendar-check-fill text-warning"></i> Mis servicios
                    </button>
                </a>
                <a href="/administrador/citaspendientes">
                    <button type="button"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2 py-3">
                        <i class="bi bi-calendar-check-fill text-warning"></i> Citas Pendientes
                    </button>
                </a>
                <a href="/administrador/citasconfirmadas">
                    <button type="button"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2 py-3">
                        <i class="bi bi-chat-left-dots-fill text-warning"></i> Citas Confirmadas
                    </button>
                </a>
                <a href="/administrador/historial">
                    <button type="button"
                        class="list-group-item list-group-item-action d-flex align-items-center gap-2 py-3">
                        <i class="bi bi-chat-left-dots-fill text-warning"></i> Historial de citas
                    </button>
                </a>
            </div>
        </div>
        <div class="card-footer py-3">
            <div class="d-flex align-items-center gap-2 mb-2">
                <i class="bi bi-clock-history text-warning"></i>
                <span class="fw-semibold small">Horario de Atención</span>
            </div>
            <div class="small text-secondary ps-4">
                <p class="mb-1">Lun a Sab: 9:30 - 8:30</p>
                <div class="d-flex align-items-center gap-1">
                    <i class="bi bi-geo-alt-fill text-warning"></i>
                    <span>Av. central 742</span>
                </div>
            </div>
        </div>
    </div>
</div>
