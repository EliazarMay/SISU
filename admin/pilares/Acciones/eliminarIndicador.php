<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../');
  }
$id = $_GET['id_Indic'];
// $Pilar = $_GET['Pilar'];
include_once '../../../includes/db2.php';
$sentencia="DELETE FROM indicadores WHERE id_indicador='".$id."'";
$conexion->query($sentencia) or die ("Error al eliminar Indicador: ".mysqli_error());

echo '<script>';
  echo 'alert("Indicador Eliminado");';
  echo 'history.go(-1);';
echo '</script>';

?>
