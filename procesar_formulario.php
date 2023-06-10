<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Dirección de correo electrónico donde se enviará el mensaje
    $destinatario = 'eluruteve@gmail.com';

    // Asunto del correo electrónico
    $asunto = 'Nuevo mensaje de contacto';

    // Construir el cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo: $correo\n";
    $cuerpoMensaje .= "Mensaje: $mensaje\n";

    // Encabezados del correo electrónico
    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $cuerpoMensaje, $headers);

    // Redirigir a una página de confirmación o mostrar un mensaje de éxito
    header('Location: confirmacion.html');
    exit();
}
?>
