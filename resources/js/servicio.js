function ServicioUpdate() {
    const modal = document.getElementById('EditarModalServicio');
    const formulario = document.getElementById('formEditarServicio');

    modal.addEventListener('show.bs.modal', function (event) {
        const boton = event.relatedTarget;
        const celdas = boton.closest('tr').cells;

        formulario.action = `/administrador/servicio/update/${boton.dataset.id}`;

        document.getElementById('editarnombreservicio').value = celdas[0].textContent.trim();
        document.getElementById('editardescripcion').value = celdas[1].textContent.trim();
        document.getElementById('editarprecio').value = celdas[2].textContent.trim();
        document.getElementById('editartiempo').value = celdas[3].textContent.trim();
    });
}

ServicioUpdate();