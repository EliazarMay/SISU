<?php
include '../../includes/db2.php';
session_start();
  if ($_SESSION['password'] != '3') {
    header('Location: ../');
  }
$id_area = $_GET['id_area'];

if ($id_area != 29) {
header("Location:MisDatos2.php?id_area=$id_area");
}else {

header("Location:DatosAlianzas.php?id_area=$id_area&sec=Academico");
}
?>
