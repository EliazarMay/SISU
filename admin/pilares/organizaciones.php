<?php
include_once '../../includes/db2.php';
$consulta = "SELECT * FROM esquemas_colaboracion;";
$areas=$conexion->query($consulta);
?>
<!doctype html>
<html lang="en">
<head>
  <title>Paz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
  <body>


		<div class="wrapper d-flex align-items-stretch">

			<nav id="sidebar">

				<div class="p-4 pt-5">

		  		<a href="../index.html" class="img logo rounded-circle mb-5" style="background-image: url(../images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pilares</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="../pilares/añadirPilares.php?id=1&año_ref=<?php echo Date("Y"); ?>">Generar un nuevo periodo</a>
                </li>
                <li>
                    <a href="../pilares/personas.php">Personas</a>
                </li>
                <li>
                    <a href="../pilares/planet.php">Planeta</a>
                </li>
                <li>
                    <a href="../pilares/prosperidad.php">Prosperidad</a>
                </li>
                <li>
                    <a href="../pilares/paz.php">Paz</a>
                </li>
                <li>
                    <a href="../pilares/alianzas.php">Alianzas</a>
                </li>
                <li>
                    <a href="../pilares/datosGenerales.php">Datos Generales</a>
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

        <h2 class="mb-4">Organizaciones</h2>
        <table class="table">
          <thead>
            <tr class="bg-info">
              <th scope="col">#</th>
              <th scope="col">Organizacion</th>
              <th scope="col" style="text-align: center">Editar</th>
              <th scope="col" style="text-align: center">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $conteo = 0;
                foreach ($areas as $area) {
                  $conteo = $conteo + 1;
              ?>
              <tr>

                <td>
                  <?php echo $conteo ?>
                </td>

                <td>
                  <?php echo $area['esquema']; ?>
                </td>

                <td style="text-align: center">
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModificarDatos" onclick="modificaForm('<?php echo $data?>')" title="Modificar">
                    <i class="far fa-edit"></i>
                  </button>
                </td>

                <td style="text-align: center">
                  <button class="btn btn-danger" data-toggle="modal" data-target="#eliminarOrganizacion" onclick="eliminarArea('<?php echo $area['id_esquema'];?>')" title="Eliminar">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </td>

              </tr>
            <?php
            }

              ?>
          </tbody>
        </table>

      </div>

      <div class="modal fade" id="eliminarOrganizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">¿Desea eliminar el area?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="Acciones/eliminarOrganizacion.php" method="GET">
                <input type="hidden" style="text-align: center;" class="form-control" id="id_Org" name="no">
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>



		</div>
    <script type="text/javascript">
    function eliminarArea(datos) {
      $('#id_Org').val(datos);
    }
    </script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
