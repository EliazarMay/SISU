<?php

	NuevoUsuario($_POST['Nombre'], $_POST['Username'], $_POST['Contraseña'], $_POST['tipo_Usuario']);

	function NuevoUsuario($Nombre, $Username, $Pass, $tipo_Usuario){
		include '../../../includes/db2.php';

    $Fechareg = date("d/m/Y");
		$sentencia="INSERT INTO
								usuarios (nombre, username, password, fecha_reg, tipo_de_usuario, estatus)
        				VALUES ('".$Nombre."', '".$Username."', '".$Pass."','".$Fechareg."','".$tipo_Usuario."','Habilitado')";

		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

				echo '<script>';
				echo 'alert("Usuario creado exitosamente!!");';
				echo 'window.location.href="../verUsuarios.php";';
				echo '</script>';

	}
?>
