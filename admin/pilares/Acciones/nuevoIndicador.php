<?php

	nuevoIndicador($_GET['Indicador'],$_GET['areasIndicadores'],);

  function nuevoIndicador($indicador, $areasIndicadores ){
		include '../../../includes/db2.php';

    $Fechareg = date("d/m/Y");
		$sentencia="INSERT INTO
								indicadores (indicador, id_area, FechaCreacion)
        				VALUES ('".$indicador."', '".$areasIndicadores."','".$Fechareg."')";

		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

				echo '<script>';
				echo 'alert("Indicador creado exitosamente!!");';
				echo 'history.go(-1);';
				echo '</script>';

	}
?>
