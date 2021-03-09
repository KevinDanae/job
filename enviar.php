<?php

// llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $correo . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . "\r\n";
$message .= "Su email es: " . $correo . "\r\n";
$message .= "Mensaje: " . $mensaje . "\r\n";
$message .= " Enviado el: " . date('d/m/Y', time());

$para = 'halo4prometeo@hotmail.es';

mail($para, $asunto, utf8_decode($message), $header);
echo "<script>alert('Correo enviado correctamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";





?>