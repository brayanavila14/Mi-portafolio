$(document).ready(function() {
    let formularioContacto = $('#formulario');

    $('#btn-send').click(function() {
        formularioContacto[0].reset();
    });
});
