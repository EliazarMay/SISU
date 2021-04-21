<?php

	nuevoIndicador($_GET['Indicador'],$_GET['areasIndicadores'],$_GET['sector']);

  function nuevoIndicador($indicador, $areasIndicadores,$sector ){
		include '../../includes/db2.php';

    $Fechareg = date("Y/m/d");
		$sentencia="INSERT INTO
								indicadores (indicador, id_area, FechaCreacion, sector)
        				VALUES ('".$indicador."', '".$areasIndicadores."','".$Fechareg."','".$sector."')";

		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

				echo '<script>';
				echo 'alert("Indicador creado exitosamente!!");';
				echo 'history.go(-1);';
				echo '</script>';

	}
?>
