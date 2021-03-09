<?php

// llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// datos para el correo
$destinatario = "kevin.lovo@gmail.com";

$carta = "De: $nombre \n ";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:index.html');


?>