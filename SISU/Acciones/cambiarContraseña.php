<?php
include_once '../../includes/db2.php';
$id = $_POST["id"];
$contraseña = $_POST["Contraseña"];
$confContraseña = $_POST["confContraseña"];

if ($contraseña != $confContraseña) {
  echo '<script>';
  echo 'alert("Las contrsaeñas no coinciden");';
  echo 'window.location.href="../informacion.php";';
  echo '</script>';

} else {
  $sentencia="UPDATE usuarios SET password = '".$confContraseña."' WHERE id='".$id."' ";
  $conexion->query($sentencia) or die ("Error cambiar contraseña comunicate con el Administrador: ".mysqli_error());
  echo '<script>';
  echo 'alert("Contraseña guardada correctamente");';
  echo 'window.location.href="../informacion.php";';
  echo '</script>';
}



?>
