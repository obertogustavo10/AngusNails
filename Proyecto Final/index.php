<?php
$destino="wilneyandreina@gmail.com";
$nombre=$_POST["txtNombre"];
$correo=$_POST["txtCorreo"];
$asunto=$_POST["txtAsunto"];
$mensaje=$_POST["txtMensaje"];
$contenido= "Nombre: " . $nombre . "   " . " Correo: ". $correo . "   " . " Asunto: " . $asunto . "  " . " Mensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("location:contacto.html");
?>