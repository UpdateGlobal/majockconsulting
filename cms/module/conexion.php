<?php 
$enlaces = mysqli_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysqli_error($enlaces));
mysqli_select_db($enlaces,'update_majock') or die('No se pudo seleccionar la base de datos');

/*$enlaces = mysqli_connect('localhost', 'majock_update', '84U}L%2EA+)s') or die('No se pudo conectar: ' . mysqli_error($enlaces));
mysqli_select_db($enlaces,'majock_update') or die('No se pudo seleccionar la base de datos');*/

?>