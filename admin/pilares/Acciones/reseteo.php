<?php
// $id = $_GET['no'];
resetearIndicador($_GET['no']);
function resetearIndicador($id){
  include '../../../includes/db2.php';
  $sentencia="UPDATE indicadores
              SET tipo_colaboracion = '', informacion = ''
              WHERE id_indicador = '".$id."' ";

  $conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));


  echo '<script>';
  echo 'alert("Operación realiza exitosamente!!");';
  echo 'window.history.back();';
  echo '</script>';
}
?>
