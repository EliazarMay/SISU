<?php
include '../../includes/db2.php';
session_start();
$nombre = $_GET['id_area'];

if ($nombre != 29) {
header("Location:MisDatos2.php?id_area=$nombre");
}else {

header("Location:DatosAlianzas.php?no=$nombre&sec=Academico");
}
?>
