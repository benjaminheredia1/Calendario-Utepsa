document.addEventListener('DOMContentLoaded', function() {
    let cerrar_modal = document.getElementsByClassName('exit-jpg-modal-eventos')[0];
    let contenedor = document.getElementsByClassName('modal-container')[0];
    cerrar_modal.addEventListener('click', function() {
        contenedor.style.display = 'none';
    })
});