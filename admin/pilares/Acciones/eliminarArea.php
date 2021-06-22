<?php
$id = $_GET['no'];
$Pilar = $_GET['Pilar'];
include_once '../../../includes/db2.php';

if ($Pilar == 1) {
	$sentencia="DELETE FROM areas WHERE id_areas='".$id."'";
	$conexion->query($sentencia) or die ("Error al eliminar Area: ".mysqli_error());

	echo '<script>';
		echo 'alert("Area Eliminada");';
		echo 'window.location.href="../personas.php";';
	echo '</script>';
} elseif ($Pilar == 2) {
	$sentencia="DELETE FROM areas WHERE id_areas='".$id."'";
	$conexion->query($sentencia) or die ("Error al eliminar Area: ".mysqli_error());

	echo '<script>';
		echo 'alert("Area Eliminada");';
		echo 'window.location.href="../planet.php";';
	echo '</script>';
}elseif ($Pilar == 3) {
	$sentencia="DELETE FROM areas WHERE id_areas='".$id."'";
	$conexion->query($sentencia) or die ("Error al eliminar Area: ".mysqli_error());

	echo '<script>';
		echo 'alert("Area Eliminada");';
		echo 'window.location.href="../prosperidad.php";';
	echo '</script>';
}elseif ($Pilar == 4) {
	$sentencia="DELETE FROM areas WHERE id_areas='".$id."'";
	$conexion->query($sentencia) or die ("Error al eliminar Area: ".mysqli_error());

	echo '<script>';
		echo 'alert("Area Eliminada");';
		echo 'window.location.href="../paz.php";';
	echo '</script>';
}elseif ($Pilar == 5) {
	$sentencia="DELETE FROM areas WHERE id_areas='".$id."'";
	$conexion->query($sentencia) or die ("Error al eliminar Area: ".mysqli_error());

	echo '<script>';
		echo 'alert("Area Eliminada");';
		echo 'window.location.href="../alianzas.php";';
	echo '</script>';
}elseif ($Pilar == 6) {
	$sentencia="DELETE FROM areas WHERE id_areas='".$id."'";
	$conexion->query($sentencia) or die ("Error al eliminar Area: ".mysqli_error());

	echo '<script>';
		echo 'alert("Area Eliminada");';
		echo 'window.location.href="../datosGenerales.php";';
	echo '</script>';
}else {
      echo '<script>';
      // echo 'alert("Error al eliminar Area");';
      echo 'history.go(-1);';
      echo '</script>';
}

?>
