<?php include("cms/module/conexion.php"); ?>
<?php
$consultarCot = 'SELECT * FROM contacto';
$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filaCot = mysqli_fetch_array($resultadoCot);
$xDesemail = $filaCot['form_mail'];

$toEmail = $xDesemail;
$subject = "Mensaje enviado desde el fomulario";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

$mensaje .= "Información del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres : ".$_POST["nombres"]."\n";
$mensaje .= "Razón Social : ".$_POST["razon_social"]."\n";
$mensaje .= "Email : ".$_POST["email"]."\n";
$mensaje .= "Telefono : ".$_POST["telefono"]."\n";
$mensaje .= "Mensaje : ".$_POST["mensaje"]."\n";

/* ---- o ---- */

$xNombres		= $_POST["nombres"];
$xRazon 		= $_POST["razon_social"];
$xEmail 		= $_POST["email"];
$xTelefono 		= $_POST["telefono"];
$xMensaje 		= $_POST["mensaje"];
$xFecha 		= $_POST["fecha_ingreso"];

$contacto = "INSERT INTO formulario(nombres, razon_social, email, telefono, mensaje, fecha_ingreso)VALUES('$xNombres', '$xRazon', '$xEmail', '$xTelefono', '$xMensaje', '$xFecha')";
$result=mysqli_query($enlaces, $contacto) or die('Consulta fallida: ' . mysqli_error($enlaces));

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Email Enviado Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>