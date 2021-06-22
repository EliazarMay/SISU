<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../');
  }


  $id = $_GET['no'];
  include_once '../../../includes/db2.php';
  $sentencia="DELETE FROM esquemas_colaboracion WHERE id_esquema='".$id."'";
  $conexion->query($sentencia) or die ("Error al eliminar Area: ".mysqli_error());

  echo '<script>';
    echo 'alert("Organización Eliminada");';
    echo 'history.go(-1);';
  echo '</script>';
?>
