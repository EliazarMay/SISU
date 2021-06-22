<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../../');
  }
$id = $_GET['no'];


include_once '../../../includes/db2.php';
$consulta = "SELECT * FROM usuarios
						 WHERE id = '$id';";

$areas=$conexion->query($consulta);

  foreach ($areas as $area) {
    $password = $area['password'];
    echo '<script>';
      echo 'var cadena = ?>$password<?php';
      echo 'alert("Usuario eliminado + cadena");';
      echo 'window.location.href="../verUsuarios.php";';
    echo '</script>';
   }

?>
