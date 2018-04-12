<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_miembro = $_REQUEST['cod_miembro'];
$eliminar = "DELETE FROM equipos_miembros WHERE cod_miembro='$cod_miembro'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:nosotros.php");
?>