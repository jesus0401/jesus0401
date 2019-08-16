<?php
$destino ="jesus.010499@gmail.com";
$mensaje = $_POST['msg_message'];
$nombre = $_POST['msg_name'];
$mail = $_POST['msg_email'];
$asunto = $_POST['msg_subject'];

$contenido= "Nombre:".$nombre."\nCorreo: ".$mail."\nAsunto".$asunto."\nMensaje".$mensaje;

/*$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ignaciobluuweb@gmail.com';
$asunto = 'Mensaje de mi sitio web';*/

mail($destino,"Contacto",$contenido);

header("Location:inicio.php");
?>