<?php
nuevaOrganizacion($_GET['Organizacion']);

function nuevaOrganizacion($Organizacion){
include_once '../../includes/db2.php';

  $sentencia="INSERT INTO
              esquemas_colaboracion (esquema)
              VALUES ('".$Organizacion."')";

  $conexion->query($sentencia) or die ("Error al crear la Organizacion: ".mysqli_error($conexion));

      echo '<script>';
      echo 'alert("Organizacion creada correctamente!!");';
      echo 'history.go(-1);';
      echo '</script>';

}
?>
