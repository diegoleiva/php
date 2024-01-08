<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    $destino = "direcciondemail@servidor.com"; // Cambia esto al correo al que quieres enviar el mensaje. gmail no funciona
    $asunto = "Nuevo mensaje de $nombre";
    $cuerpoMensaje = "Nombre: $nombre\nCorreo electrónico: $email\nMensaje:\n$mensaje";

    // Puedes agregar más encabezados según sea necesario, como From, Reply-To, etc.
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Intenta enviar el correo
    if (mail($destino, $asunto, $cuerpoMensaje, $headers)) {
        echo "Mensaje enviado correctamente";
    } else {
        echo "Error al enviar el mensaje";
    }
}
?>
