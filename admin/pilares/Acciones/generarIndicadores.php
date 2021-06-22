<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../');
  }
  include '../../../includes/db2.php';
$indicador = $_GET['indicador'];
$id_areas = $_GET['id_areas'];
$año = $_GET['año'];
for ($i=0; $i < sizeof($indicador); $i++) {
  $sentencia="INSERT INTO indicadores (indicador,id_area,FechaCreacion) VALUES ('".$indicador[$i]."','".$id_areas[$i]."','".$año[$i]."')";
  $conexion->query($sentencia) or die ("Error al crear la Organizacion: ".mysqli_error($conexion));

}

      echo '<script>';
      echo 'alert("Organizacion creada correctamente!!");';
      echo 'history.go(-1);';
      echo '</script>';
?>
