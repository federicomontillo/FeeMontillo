<?php

if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["comentario"]) ){
$to = "jf.montillo@gmail.com";
$subject = "Consulta";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Telefono: ".$_POST["telefono"]."\n\n";
$contenido .= "Comentario: ".$_POST["comentario"]."\n\n";
$header = "From: no-reply@c2150269.ferozo.com\nReply-To".$_POST["email"]."\n";

if(mail($to, $subject, $contenido ,$header)){
echo "<script>alert('Correo enviado con éxito!')</script>";
echo "<script>setTimeout(\"location.href='contacto.html'\",1000)</script>";
}
}
?>