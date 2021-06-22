<?php
error_reporting(0);
include '../../includes/db2.php';
$ide_areas = $_POST['id'];
$año_refe = $_POST['año_ref'];
$año = $_POST['año'];
$alumnos="SELECT *
FROM indicadores INNER JOIN areas ON indicadores.id_area = areas.id_areas
WHERE indicadores.id_area = '".$ide_areas."' AND areas.año = '".$año_refe."'";
$resAlumnos=$conexion->query($alumnos);
?>
<!doctype html>
<html lang="en">

<head>
  <title>Pilares</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
        <a href="../" class="img logo rounded-circle mb-5" style="background-image: url(../images/logo.jpg);"></a>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pilares</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="añadirPilares.php?id=1&año_ref=<?php echo Date("Y"); ?>">Generar un nuevo periodo</a>
              </li>
              <li>
                <a href="personas.php">Personas</a>
              </li>
              <li>
                <a href="planet.php">Planeta</a>
              </li>
              <li>
                <a href="prosperidad.php">Prosperidad</a>
              </li>
              <li>
                <a href="paz.php">Paz</a>
              </li>
              <li>
                <a href="alianzas.php">Alianzas</a>
              </li>
              <li>
                <a href="datosGenerales.php">Datos Generales</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuarios</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="../usuarios/nuevosUsuarios.php">Añadir Usuarios</a>
              </li>
              <li>
                <a href="../usuarios/verUsuarios.php">Ver Usuarios</a>
              </li>
            </ul>
          </li>

        </ul>


      </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">
      <a href="../../includes/logout.php">Cerrar Sesión</a>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </nav>

      <!-- <button type="button" data-toggle="modal" data-target="#NewArea">
        Nueva Indicador
      </button> -->
      <br><br>
      <div class="">

      <form class="form-comtrol" action="añadirPilares.php" method="post">

        <label class="label">Seleccione el area que desea generar:</label>
        <select class="form-control" name="id">
          <?php
            $res = mysqli_query($conexion,"select * from areas");
            while ($row = mysqli_fetch_array($res)) {
            ?>

          <option value="<?php echo $row["id_areas"]; ?>"><?php echo $row["area"];?></option>

          <?php
            }
            ?>
        </select>
        <br>
        <label>Seleccione el año de referencia:</label>
        <br>
        <select class="form-control" name="año_ref">
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
        <br>
        <label>Ingrese el año que desea generar</label>
        <input type="number" name="año" class="form-control" required>
        <br>
        <button class="form-control btn-info" type="submit">Buscar</button>
      </form>
    </div>

      <h2>Indicadores</h2>
      <form class="" action="Acciones/generarIndicadores.php" method="get">

			<table class="table">
				<thead>

				<tr class="bg-warning">
					<th>#</th>
					<th>Indicador</th>
				</tr>

				</thead>
				<?php

        $i = 1;
				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

				{
          $i = $i+1;
					echo'<tr>
						 <td>'.$registroAlumnos['numero'].'</td>
             <td><input type="text" class="form-control" name="indicador[]" value="'.$registroAlumnos['indicador'].'"> </td>
             <td><input type="hidden" class="form-control" name="id_areas[]" value="'.$ide_areas.'" /></td>
             <td><input type="hidden" class="form-control" name="año[]" value="'.$año.'" /></td>

               </tr>';
				}


				?>

			</table>

      <button class=" btn-success" type="submit">Generar Indicadores</button>
    </form>
    </div>
  </div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>
