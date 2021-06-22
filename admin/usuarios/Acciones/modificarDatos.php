<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../../');
  }
include_once '../../../includes/db2.php';
$id = $_GET['id'];
$nombreCompleto = $_GET['nombreCompleto'];
$username = $_GET['username'];
$tipo_de_usuario = $_GET['tipo_de_usuario'];
$estatus = $_GET['estatus'];
$contraseña = $_GET['contraseña'];
$confirmarContraseña = $_GET['confirmarContraseña'];
$puesto = $_GET['puesto'];
// echo $nombreCompleto."||".$username."||".$tipo_de_usuario."||".$estatus."||".$contraseña."||".$confirmarContraseña."||".$id;

if ($contraseña != $confirmarContraseña) {
  echo '<script>';
  echo 'alert("Las contraseñas no coinciden");';
  echo 'window.location.href="../verUsuarios.php";';
  echo '</script>';

} else {
  $sentencia="UPDATE usuarios SET
                     nombre = '".$nombreCompleto."',
                     username = '".$username."',
                     tipo_de_usuario = '".$tipo_de_usuario."',
                     estatus = '".$estatus."',
                     puesto = '".$puesto."',
                     password = '".$confirmarContraseña."' WHERE id='".$id."' ";
  $conexion->query($sentencia) or die ("Error al modificar datos comunicate con el Administrador: ".mysqli_error());
  echo '<script>';
  echo 'alert("Datos actualizados correctamente");';
  echo 'window.location.href="../verUsuarios.php";';
  echo '</script>';
}
?>
