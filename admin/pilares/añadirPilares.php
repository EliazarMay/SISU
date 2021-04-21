<?php
include '../../includes/db2.php';
$ide_areas = $_GET['id'];
$alumnos="SELECT *
FROM indicadores
WHERE id_area = '".$ide_areas."'";
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
                <a href="añadirPilares.php?id=0">Generar un nuevo periodo</a>
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

      <form class="form-comtrol" action="añadirPilares.php?>" method="get">

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
        <select class="form-control" name="">
          <option value="">2019</option>
          <option value="">2020</option>
          <option value="">2021</option>
          <option value="">2022</option>
          <option value="">2023</option>
          <option value="">2024</option>
          <option value="">2025</option>
          <option value="">2026</option>
          <option value="">2027</option>
          <option value="">2028</option>
          <option value="">2029</option>
          <option value="">2030</option>

        </select>
        <br>
        <button class="form-control btn-info" type="submit">Buscar</button>
      </form>
    </div>

      <h2>Indicadores</h2>
      <form method="post">
			<table class="table">
				<thead>

				<tr class="bg-warning">
					<th>#</th>
					<th>Indicador</th>
				</tr>

				</thead>
				<?php

				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

          	 <td hidden><input name="idalu[]" value="'.$registroAlumnos['id_indicador'].'" /></td>
						 <td>'.$registroAlumnos['numero'].'</td>
             <td><input type="text" class="form-control" name="carr['.$registroAlumnos['id_indicador'].']" value="'.$registroAlumnos['indicador'].'" /></td>

               </tr>';
				}


				?>

			</table>
			<input type="submit" name="actualizar" value="Generar Indicadores" class="btn btn-success" />
		</form>
      <!-- Modal -->
      <div class="modal fade" id="NewArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Nueva Área</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="Acciones/añadirArea.php" method="post">
                <div class="form-group">
                  <label for="area">Nombre del Indicador</label>
                  <input type="text" class="form-control" name="Area" value="">
                </div>

                <div class="form-group">
                  <label for="Pilar">Area</label><br>
                  <select class="form-control" name="Pilar">
                    <?php
                      $res = mysqli_query($conexion,"select * from areas");
                      while ($row = mysqli_fetch_array($res)) {
                      ?>

                    <option value="<?php echo $row["id_areas"]; ?>"><?php echo $row["area"];?></option>

                    <?php
                      }
                      ?>
                  </select>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <input type="button" name="actualizar" value="Actualizar Registros" class="btn btn-primary">
                  <!-- <button type="submit" class="btn btn-primary">Guardar Cambios</button> -->
                </div>
              </form>
              <?php

          			if(isset($_POST['actualizar']))
          			{
          				foreach ($_POST['idalu'] as $ids)
          				{

          					$editNom=mysqli_real_escape_string($conexion, $_POST['carr'][$ids]);
          					$editCarr=mysqli_real_escape_string($conexion, $_POST['gru'][$ids]);
          					$editGru=mysqli_real_escape_string($conexion, $_POST['otoñ'][$ids]);
          					$editCont=mysqli_real_escape_string($conexion, $_POST['cont'][$ids]);
          					$editEnlac=mysqli_real_escape_string($conexion, $_POST['enla'][$ids]);

          					$actualizar=$conexion->query("UPDATE indicadores SET  periodo_1='$editNom', periodo_2='$editCarr',
          																		periodo_3='$editGru', conteo_anual='$editCont', enlace='$editEnlac' WHERE id_indicador='$ids'");
          				}

          				if($actualizar==true)
          				{
          					echo '<script>';
          					echo 'alert("Datos actualizados correctamente");';
          					echo 'window.location.href="MisDatos.php";';
          					echo '</script>';
          				}

          				else
          				{
          					echo "No se pudieron actualizar los datos correctamente";
          				}
          			}

?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>
