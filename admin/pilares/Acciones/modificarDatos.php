<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../');
  }
$id=$_GET['id_area'];
$nombreArea=$_GET['nombreArea'];
$año=$_GET['año'];
$periodoInicial=$_GET['PeriodoInicial'];
$periodoFinal=$_GET['PeriodoFInal'];
$Pilar=$_GET['Pilar'];
$responsable = $_GET['Responsable'];
include_once '../../../includes/db2.php';



$sentencia="UPDATE areas SET
                   area = '".$nombreArea."',
                   año = '".$año."',
                   periodo_inicial = '".$periodoInicial."',
                   periodo_final = '".$periodoFinal."',
                   id_pilar = '".$Pilar."',
                   id_usuario = '".$responsable."'
                   WHERE id_areas='".$id."' ";
$conexion->query($sentencia) or die ("Error al modificar datos comunicate con el Administrador: ".mysqli_error());
echo '<script>';
echo 'alert("Datos actualizados correctamente");';
echo 'window.history.back();';
echo '</script>';
?>
