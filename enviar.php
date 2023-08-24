<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    $destinatario = "eduardoantoniosanchezbaez@gmail.com"; // Reemplaza con tu dirección de correo electrónico.
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $mensajeCorreo = "Nombre: $nombre\nCorreo electrónico: $email\nMensaje:\n$mensaje";
    
    if (mail($destinatario, $asunto, $mensajeCorreo)) {
        echo "El correo electrónico se ha enviado correctamente.";
    } else {
        echo "Hubo un problema al enviar el correo electrónico.";
    }
    
    // Redirige al usuario a una página de confirmación.
    header("Location: inicio.php");
} else {
    // Si se accede directamente a este archivo PHP sin enviar el formulario, redirige a la página del formulario.
    header("Location: prueba.php");
}
?>
