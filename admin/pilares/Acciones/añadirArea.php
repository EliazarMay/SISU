<?php
$Area = $_POST["Area"];
$Año = $_POST["Año"];
$PeriodoInicial = $_POST["PeriodoInicial"];
$PeriodoFInal = $_POST["PeriodoFinal"];
$Pilar = $_POST["Pilar"];
$Responsable = $_POST["Responsable"];

if ($_POST["Pilar"] == 1) {
    include '../../../includes/db2.php';
    $sentencia="INSERT INTO
                areas (area, año, periodo_inicial, periodo_final, id_pilar, id_usuario)
                VALUES ('".$Area."', '".$Año."', '".$PeriodoInicial."', '".$PeriodoFInal."', '".$Pilar."', '".$Responsable."')";

    $conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

        echo '<script>';
        echo 'alert("Area creada exitosamente!!");';
        echo 'window.location.href="../personas.php";';
        echo '</script>';
  }
else if ($_POST["Pilar"] == 2) {
  include '../../../includes/db2.php';
  $sentencia="INSERT INTO
              areas (area, id_pilar,id_usuario)
              VALUES ('".$Area."', '".$Pilar."', '".$Responsable."')";

  $conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

      echo '<script>';
      echo 'alert("Area creada exitosamente!!");';
      echo 'window.location.href="../planet.php";';
      echo '</script>';
}
else if ($_POST["Pilar"] == 3) {
  include '../../../includes/db2.php';
  $sentencia="INSERT INTO
              areas (area, id_pilar,id_usuario)
              VALUES ('".$Area."', '".$Pilar."', '".$Responsable."')";

  $conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

      echo '<script>';
      echo 'alert("Area creada exitosamente!!");';
      echo 'window.location.href="../prosperidad.php";';
      echo '</script>';
}else if ($_POST["Pilar"] == 4) {
  include '../../../includes/db2.php';
  $sentencia="INSERT INTO
              areas (area, id_pilar,id_usuario)
              VALUES ('".$Area."', '".$Pilar."', '".$Responsable."')";

  $conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

      echo '<script>';
      echo 'alert("Area creada exitosamente!!");';
      echo 'window.location.href="../paz.php";';
      echo '</script>';
}else if ($_POST["Pilar"] == 5) {
  include '../../../includes/db2.php';
  $sentencia="INSERT INTO
              areas (area, id_pilar,id_usuario)
              VALUES ('".$Area."', '".$Pilar."', '".$Responsable."')";

  $conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

      echo '<script>';
      echo 'alert("Area creada exitosamente!!");';
      echo 'window.location.href="../alianzas.php";';
      echo '</script>';
}else if ($_POST["Pilar"] == 6) {
  include '../../../includes/db2.php';
  $sentencia="INSERT INTO
              areas (area, id_pilar,id_usuario)
              VALUES ('".$Area."', '".$Pilar."', '".$Responsable."')";

  $conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

      echo '<script>';
      echo 'alert("Area creada exitosamente!!");';
      echo 'window.location.href="../datosGenerales.php";';
      echo '</script>';
}else {
      echo '<script>';
      echo 'alert("Error al eliminar Usuario");';
      echo 'history.go(-1);';
      echo '</script>';
}

 ?>
