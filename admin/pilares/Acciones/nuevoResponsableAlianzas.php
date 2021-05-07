<?php
include '../../../includes/db2.php';
$contador = "SELECT * FROM contador;";
$usuarios=$conexion->query($contador);
$conteo = 0;
foreach ($usuarios as $usuario) {
  $conteo = $conteo + 1;
}
$conteo = $conteo + 1;
echo $conteo;

$Area = $_POST["Area2"];
$Responsable = $_POST["Responsable2"];

    $sentencia = "UPDATE areas SET
                       id_usuario$conteo = '".$Responsable."'
                       WHERE id_areas='".$Area."' ";

		$conexion->query($sentencia) or die ("Error al añadir responsable: ".mysqli_error($conexion));

    $sentencia2 = "INSERT INTO
    contador (id_contador)
    VALUES ('".$conteo."')";
    $conexion->query($sentencia2) or die ("Error al añadir responsable: ".mysqli_error($conexion));

    echo '<script>';
    echo 'alert("Responsable creado exitosamente!!");';
    echo 'history.go(-1);';
    echo '</script>';






?>
