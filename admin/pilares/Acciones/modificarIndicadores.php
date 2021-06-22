<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../');
  }
$id = $_GET['id_Indica'];
$indicador = $_GET['indicador'];
include_once '../../../includes/db2.php';


$sentencia="UPDATE indicadores SET
                   indicador = '".$indicador."'
                   WHERE id_indicador='".$id."' ";

$conexion->query($sentencia) or die ("Error al modificar datos comunicate con el Administrador: ".mysqli_error());

echo '<script>';
echo 'alert("Datos actualizados correctamente");';
echo 'history.go(-1);';
echo '</script>';
?>
