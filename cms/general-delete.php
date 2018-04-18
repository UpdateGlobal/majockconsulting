<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_general = $_REQUEST['cod_general'];
$eliminar = "DELETE FROM general WHERE cod_general='$cod_general'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:general.php");
?>