<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$destinatario = "eduardoantoniosanchezbaez@gmail.com";
$asunto = "Contacto";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $carta);
header('Location:pruebaa.html')

?>