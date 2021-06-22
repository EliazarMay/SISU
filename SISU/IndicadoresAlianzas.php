<?php
session_start();
$id = $_GET['no'];
$ar = $_GET['ar'];
$sec = $_GET['sec'];
$año = $_GET['año'];
include_once '../includes/db2.php';

$consulta = "SELECT * FROM indicadores WHERE id_area = '$id' AND sector = '$sec' AND FechaCreacion='$año';";
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
      <a href=MisAreas/MisIndicadores.php>Mis Indicadores</a>
      <a href="informacion.php" class="text"><?php echo $_SESSION['nombre']; ?></a>
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
          <a href="Personas.php?año=<?php echo Date("Y"); ?>" class="menu-item col1" title="Personas"><i class="fas fa-user-friends"></i></a>
          <a href="Planeta.php?año=<?php echo Date("Y"); ?>" class="menu-item col2"><i class="fas fa-globe-americas" title="Planeta"></i></a>
          <a href="Prosperidad.php?año=<?php echo Date("Y"); ?>" class="menu-item col3"><i class="fas fa-hand-holding-usd" title="Prosperidad"></i></i></a>
          <a href="Paz.php?año=<?php echo Date("Y"); ?>" class="menu-item col4"><i class="fas fa-dove" title="Paz"></i></a>
          <a href="Alianzas.php?año=<?php echo Date("Y"); ?>" class="menu-item col5"><i class="fas fa-handshake" title="Alianzas"></i></a>
          <a href="DatosGenerales.php?año=<?php echo Date("Y"); ?>" class="menu-item col6"><i class="fas fa-school" title="Datos Generales"></i></a>
        </nav>

      </div>

      <!-- Final Navbar -->
      <div class="col-8">
        <form class="form-group" action="IndicadoresAlianzas.php" method="get">
          <div class="form-group mb-2">
            <input type="hidden" name="no" value="<?php echo $id; ?>">
            <input type="hidden" name="ar" value="<?php echo $ar; ?>">
            <input type="hidden" name="sec" value="<?php echo $sec; ?>">
            <select class="form-control" name="año">
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
              <option value="2030">2030</option>
            </select>
          </div>
          <button type="submit" class="btn btn-info mb-2 form-control">Buscar</button>
        </form>
        <a class="btn btn-primary" href="IndicadoresAlianzas.php?no=29&ar=Alianzas&sec=Academico&año=<?php echo $año; ?>" role="button">Sector Académico</a>
        <a class="btn btn-secondary" href="IndicadoresAlianzas.php?no=29&ar=Alianzas&sec=Publico&año=<?php echo $año; ?>" role="button">Sector Público</a>
        <a class="btn btn-warning" href="IndicadoresAlianzas.php?no=29&ar=Alianzas&sec=Privado&año=<?php echo $año; ?>" role="button">Sector Privado</a>
        <a class="btn btn-info" href="IndicadoresAlianzas.php?no=29&ar=Alianzas&sec=Sociedad Civil&año=<?php echo $año; ?>" role="button">Sector de la Sociedad Civil</a><br><br>

        <!-- Inicio Tabla -->
        <table class="table">
          <thead style="text-align: center">
            <tr class="bg-info">
              <th scope="col">#</th>
              <th scope="col">Indicador</th>
              <th scope="col">Tipo de Colaboración</th>
              <th scope="col">Especificar</th>
              <th scope="col">Enlace Drive</th>
            </tr>
          </thead>
          <tbody>
            <?php
    						$contador = 0;
    							foreach ($areas as $area) {
                    $contador = $contador + 1;
    						?>
            <tr>
              <td> <?php echo $contador; ?> </td>
              <td> <?php echo $area['indicador']; ?> </td>
              <td style="text-align: center"> <?php echo $area['tipo_colaboracion']; ?> </td>
              <td style="text-align: center"> <?php echo $area['informacion']; ?> </td>
              <td style="text-align: center">
                <a style=" color: rgb(50, 138, 181); font-size: 1.3rem;" href="<?php echo $area['enlace'];?>" title="Enlace a Drive">
                  <i class="fab fa-google-drive"></i>
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
