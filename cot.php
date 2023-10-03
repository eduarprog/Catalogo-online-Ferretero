<?php

$nombre = $_POST['nombre'];
$rnc = $_POST['rnc'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$destinatario = "eduardoantoniosanchezbaez@gmail.com";
$asunto = "Cotizacion";

$carta = "De: $nombre \n";
$carta = "Rnc: $rnc\n";
$carta .= "Correo: $email \n";
$carta .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $carta);


?>