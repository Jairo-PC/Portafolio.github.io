<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $mensaje = $_POST["msg"];

    $destino = "perezcordovajairo13ley.com";
    $asunto = "Nuevo mensaje de contacto de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Utiliza la función mail() para enviar el correo
    mail($destino, $asunto, $contenido, "From: $email");

    echo "Mensaje enviado con éxito. ¡Gracias por ponerte en contacto!";
} else {
    echo "Error en el envío del formulario.";
}
?>
