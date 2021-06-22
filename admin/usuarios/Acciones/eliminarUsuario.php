<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../../');
  }
	EliminarUsuario($_GET['no']);

	function EliminarUsuario($id){
		include '../../../includes/db2.php';
		$sentencia="DELETE FROM usuarios WHERE id = '".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar usuario: ".mysqli_error($conexion));
	}

	echo '<script>';
		echo 'alert("Usuario eliminado");';
		echo 'window.location.href="../verUsuarios.php";';
	echo '</script>';
?>
