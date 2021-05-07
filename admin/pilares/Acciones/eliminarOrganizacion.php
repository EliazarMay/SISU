<?php
$id = $_GET['no'];
include_once '../../../includes/db2.php';
$sentencia="DELETE FROM esquemas_colaboracion WHERE Id_esquema='".$id."'";
$conexion->query($sentencia) or die ("Error al eliminar Organizacion: ".mysqli_error());

echo '<script>';
  echo 'alert("Esquema Eliminado");';
  echo 'history.go(-1);';
echo '</script>';

?>
