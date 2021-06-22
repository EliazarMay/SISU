<?php

	NuevoUsuario($_POST['Nombre'], $_POST['Username'], $_POST['Contraseña'], $_POST['Puesto'], $_POST['tipo_Usuario']);

	function NuevoUsuario($Nombre, $Username, $Pass, $Puesto, $tipo_Usuario){
		include '../../../includes/db2.php';

    $Fechareg = date("d/m/Y");
		$sentencia="INSERT INTO
								usuarios (nombre, username, password, fecha_reg, puesto,tipo_de_usuario, estatus)
        				VALUES ('".$Nombre."', '".$Username."', '".$Pass."', '".$Fechareg."','".$Puesto."','".$tipo_Usuario."','Habilitado')";

		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

				echo '<script>';
				echo 'alert("Usuario creado exitosamente!!");';
				echo 'window.location.href="../nuevosUsuarios.php";';
				echo '</script>';

	}
?>
