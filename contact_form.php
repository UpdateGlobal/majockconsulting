<?php
$toEmail = "raulupdate@gmail.com";
$subject = "Mensaje enviado desde el fomulario";
$mailHeaders = "From: " . $_POST["nombres"] . "<". $_POST["mail"] .">\r\n";

$mensaje .= "Información del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres : ".$_POST["nombres"]."\n";
$mensaje .= "Razón Social : ".$_POST["razon_social"]."\n";
$mensaje .= "Email : ".$_POST["mail"]."\n";
$mensaje .= "Telefono : ".$_POST["telefono"]."\n";
$mensaje .= "Mensaje : ".$_POST["mensaje"]."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Email Enviado Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>