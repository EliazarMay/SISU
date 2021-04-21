<?php
$id = $_GET['no'];
$ar = $_GET['ar'];
$sec = $_GET['sec'];
session_start();
include_once '../includes/db2.php';

$consulta = "SELECT * FROM indicadores WHERE id_area = '$id' AND sector = '$sec';";
$areas=$conexion->query($consulta);
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="US-ASCII">
  <title>Desarrollo Estudiantil</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>

<body class="bg-image img-responsive">

  <div class="header">
    <!-- <a href="#default" class="logo"> <img src="../img/si1.jpeg" alt=""> </a> -->
    <div class="header-right">
      <a href="menu.php">Inicio</a>
      <a href="../includes/logout.php">Cerrar Sesión</a>
    </div>
  </div>

  <h1 align="center"><?php echo $ar;?></h1>



  <div class="container-fluid">
    <div class="row row-cols-2">

      <!-- Inico Navbar -->

      <div class="col-3">
        <nav class="menu">
          <input type="checkbox" href="#" name="expandmenu" id="expandmenu" class="expandmenu">
          <label class="expandmenu-button" for="expandmenu">
            <span class="lines first-line"></span>
            <span class="lines sec-line"></span>
            <span class="lines third-line"></span>
          </label>
          <a href="Personas.php" class="menu-item col1" title="Personas"><i class="fas fa-user-friends"></i></a>
          <a href="Planeta.php" class="menu-item col2"><i class="fas fa-globe-americas" title="Planeta"></i></a>
          <a href="Prosperidad.php" class="menu-item col3"><i class="fas fa-hand-holding-usd" title="Prosperidad"></i></i></a>
          <a href="Paz.php" class="menu-item col4"><i class="fas fa-dove" title="Paz"></i></a>
          <a href="Alianzas.php" class="menu-item col5"><i class="fas fa-handshake" title="Alianzas"></i></a>
          <a href="DatosGenerales.php" class="menu-item col6"><i class="fas fa-school" title="Datos Generales"></i></a>
        </nav>

      </div>

      <!-- Final Navbar -->
      <div class="col-8">
        <a class="btn btn-primary" href="IndicadoresAlianzas.php?no=29&ar=Alianzas&sec=Academico" role="button">Sector Académico</a>
        <a class="btn btn-secondary" href="IndicadoresAlianzas.php?no=29&ar=Alianzas&sec=Publico" role="button">Sector Público</a>
        <a class="btn btn-warning" href="IndicadoresAlianzas.php?no=29&ar=Alianzas&sec=Privado" role="button">Sector Privado</a>
        <a class="btn btn-info" href="IndicadoresAlianzas.php?no=29&ar=Alianzas&sec=Sociedad Civil" role="button">Sector de la Sociedad Civil</a><br><br>

        <!-- Inicio Tabla -->
        <table class="table">
          <thead style="text-align: center">
            <tr class="bg-info">
              <th scope="col">#</th>
              <th scope="col">Indicador</th>
              <th scope="col">Primavera</th>
              <th scope="col">Verano</th>
              <th scope="col">Otoño</th>
              <th scope="col">Anual</th>
              <th scope="col">Enlace Drive</th>
              <th scope="col">Ver Gráficas</th>
            </tr>
          </thead>
          <tbody>
            <?php
    						$php = ".php";
    							foreach ($areas as $area) {
    						?>
            <tr>
              <td> <?php echo $area['numero']; ?> </td>
              <td> <?php echo $area['indicador']; ?> </td>
              <td style="text-align: center"> <?php echo $area['periodo_1']; ?> </td>
              <td style="text-align: center"> <?php echo $area['periodo_2']; ?> </td>
              <td style="text-align: center"> <?php echo $area['periodo_3']; ?> </td>
              <td style="text-align: center"> <?php echo $area['conteo_anual']; ?> </td>
              <td style="text-align: center">
                <a style=" color: rgb(50, 138, 181); font-size: 1.3rem;" href="<?php echo $area['enlace'];?>" title="Enlace a Drive">
                  <i class="fab fa-google-drive"></i>
                </a>
              </td>
              <td style="text-align: center">
                <a style=" color: rgb(228, 21, 70); font-size: 1.3rem;" href="Graficas/index.php?id_indicador=<?php echo $area['id_indicador'];?>" title="Gráficas">
                  <i class="fas fa-chart-bar"></i>
                </a>
              </td>
            </tr>

            <?php
    					}

    						?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>


</html>
