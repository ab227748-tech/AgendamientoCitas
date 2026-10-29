function ServicioUpdate() {
    const modal = document.getElementById('EditarModalServicio');
    const formulario = document.getElementById('formEditarServicio');

    if (modal && formulario) {
        modal.addEventListener('show.bs.modal', function (event) {
            const boton = event.relatedTarget;
            const celdas = boton.closest('tr').cells;

            formulario.action = `/administrador/servicio/update/${boton.dataset.id}`;

            document.getElementById('editarnombreservicio').value =
                boton.dataset.nombre ?? celdas[0].textContent.trim();
            document.getElementById('editardescripcion').value =
                boton.dataset.descripcion ?? celdas[1].textContent.trim();
            document.getElementById('editarprecio').value =
                boton.dataset.precio ?? celdas[2].textContent.replace(/[^0-9.]/g, '').trim();
            document.getElementById('editartiempo').value =
                boton.dataset.tiempo ?? celdas[3].textContent.replace(/[^0-9]/g, '').trim();
        });
    }

    const buscador = document.getElementById('buscarServicioInput');
    const tabla = document.getElementById('tablaServicios');
    const contadorMostrados = document.getElementById('serviciosMostrados');

    if (buscador && tabla) {
        buscador.addEventListener('input', function () {
            const termino = this.value.toLowerCase().trim();
            const filas = tabla.querySelectorAll('tbody tr');
            let visibles = 0;

            filas.forEach((fila) => {
                const coincide = fila.textContent.toLowerCase().includes(termino);
                fila.classList.toggle('d-none', !coincide);
                if (coincide) {
                    visibles++;
                }
            });

            if (contadorMostrados) {
                contadorMostrados.textContent = visibles;
            }
        });
    }
}

ServicioUpdate();