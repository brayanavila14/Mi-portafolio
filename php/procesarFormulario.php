<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destino = 'brayandavidavilaorozco@gmail.com';
    $asunto = 'Nuevo mensaje desde el formulario';

    $contenido_destinatario = "Hey Brayan,\n\n";
    $contenido_destinatario .= "$nombre te quiere decir que:\n\n";
    $contenido_destinatario .= "$mensaje\n\n";
    $contenido_destinatario .= "Responderé a su correo $email";

    mail($destino, $asunto, $contenido_destinatario);

    $contenido_remitente = "¡Hola $nombre!\n\n";
    $contenido_remitente .= "Gracias por ponerte en contacto. Aquí está el mensaje que enviaste:\n\n";
    $contenido_remitente .= "$mensaje\n\n";
    $contenido_remitente .= "¡Recibirás una respuesta pronto!\n\n";
    $contenido_remitente .= "¡Saludos!\n";
    $contenido_remitente .= "atte. Brayan David Avila Orozco";

    mail($email, "Confirmación de mensaje enviado", $contenido_remitente);
    exit;
}
?>

