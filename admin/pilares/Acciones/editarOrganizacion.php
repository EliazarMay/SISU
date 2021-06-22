<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../');
  }
$id_esquema=$_GET['id_esquema'];
$esquema=$_GET['esquema'];
include_once '../../../includes/db2.php';



$sentencia="UPDATE esquemas_colaboracion SET
                   esquema = '".$esquema."'
                   WHERE id_esquema='".$id_esquema."' ";
$conexion->query($sentencia) or die ("Error al modificar datos comunicate con el Administrador: ".mysqli_error());
echo '<script>';
echo 'alert("Datos actualizados correctamente");';
echo 'window.history.back();';
echo '</script>';
?>
