<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$destinatario = "eduardoantoniosanchezbaez@gmail.com";
$asunto = "Opinion";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $carta);


