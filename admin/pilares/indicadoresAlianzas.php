<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../');
  }

$id = $_GET['no'];
$ar = $_GET['ar'];
$sec = $_GET['sec'];
session_start();
include_once '../../includes/db2.php';

$consulta = "SELECT * FROM indicadores WHERE id_area = '$id' AND sector = '$sec';";
$areas=$conexion->query($consulta);
?>

<!doctype html>
<html lang="en">

<head>
  <title>Personas</title>
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
      <h1  align="center"><?php echo $ar;?></h1>
      <button type="button" data-toggle="modal" data-target="#nuevoIndicador" class="form-group">Nuevo Indicador</button>
      <a class="btn btn-primary" href="indicadoresAlianzas.php?no=<?php echo $id ?>&ar=Alianzas&sec=Academico" role="button">Sector Académico</a>
      <a class="btn btn-secondary" href="indicadoresAlianzas.php?no=<?php echo $id; ?>&ar=Alianzas&sec=Publico" role="button">Sector Público</a>
      <a class="btn btn-warning" href="indicadoresAlianzas.php?no=<?php echo $id; ?>&ar=Alianzas&sec=Privado" role="button">Sector Privado</a>
      <a class="btn btn-info" href="indicadoresAlianzas.php?no=<?php echo $id; ?>&ar=Alianzas&sec=Sociedad Civil" role="button">Sector de la Sociedad Civil</a>
      <button type="button" data-toggle="modal" data-target="#nuevaOrganizacion" class="btn btn-dark">Nueva Organización</button>
      <div class="col">
        <!-- Inicio Tabla -->
        <table class="table">
          <thead style="text-align: center">
            <tr class="bg-info">
              <th scope="col">#</th>
              <th scope="col">Indicador</th>
              <th scope="col">Tipo de Colaboración</th>
              <th scope="col">Especificar</th>
              <th scope="col" colspan="3">Acciones</th>
              <th scope="col">Enlace a Drive</th>
              <th scope="col">Ver Gráficas</th>
            </tr>
          </thead>
          <tbody >
            <?php
            $conteo = 0;
              foreach ($areas as $area) {
                $conteo = $conteo + 1;
                $data =
                $area['id_indicador']."||".
                $area['indicador'];
            ?>
            <tr>
              <td> <?php echo $conteo ?> </td>
              <td> <?php echo $area['indicador']; ?> </td>
              <td style="text-align: center"> <?php echo $area['tipo_colaboracion']; ?> </td>
              <td style="text-align: center" > <?php echo $area['informacion']; ?> </td>

              <td style="text-align: center" >
                <a href="Acciones/reseteo.php?no=<?php echo $area['id_indicador']; ?>" title="Restaurar">
                  <button class="btn btn-success" name="">
                    <i class="fab fa-creative-commons-zero"></i>
                  </button>
                </a>
              </td>
              <td style="text-align: center" >
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modificarIndicadores" onclick="modificarIndicadores('<?php echo $data;?>')" title="Modificar">
                    <i class="fas fa-edit"></i>
                  </button>
              </td>
              <td style="text-align: center; background-color: transparent;">

                  <button class="btn btn-danger" data-toggle="modal" data-target="#eliminarIndicadores" onclick="eliminarIndicadores('<?php echo $area['id_indicador'];?>')" title="Eliminar">
                    <i class="fas fa-trash-alt"></i>
                  </button>
              </td>
              <td style="text-align: center">
                <a style=" color: rgb(50, 138, 181); font-size: 1.3rem;" title="Enlace a Drive"
                   href="<?php echo $area['enlace']; ?>">
                    <i class="fab fa-google-drive fa-2x"></i>
                </a>
              </td>
              <td style="text-align: center">
                <a style=" color: rgb(228, 21, 70); font-size: 1.3rem;" title="Ver Gráfica"
                   href="Graficas/index.php?id_indicador=<?php echo $area['id_indicador']; ?>">
                    <i class="far fa-chart-bar fa-2x"></i>
                </a>
              </td>
            </tr>

            <?php
          }

            ?>
          </tbody>
        </table>
      </div>


      <div class="modal fade" id="nuevoIndicador" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Añadir un nuevo indicador</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="Acciones/nuevoIndicadorAlianzas.php" method="GET">
                <div class="form-group">
                  <label for="pilar">Nombre Indicador</label>
                  <input type="text" name="Indicador" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="pilar">Area:</label><br>
                  <select class="form-control" name="areasIndicadores">
                    <option value="<?php echo $id ?>">Alianzas</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pilar">Sector:</label><br>
                  <select class="form-control" name="sector">
                    <option value="Academico">Academico</option>
                    <option value="Publico">Publico</option>
                    <option value="Privado">Privado</option>
                    <option value="Sociedad Civil">Sector de la Sociedad Civil</option>
                  </select>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success">Envíar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>



          <div class="modal fade" id="modificarIndicadores" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Información:</h5>
                </div>
                <form class="form-group" action="Acciones/modificarIndicadores.php" method="get">
                  <div class="modal-body">
                    <label>Nombre Indicador:</label>
                    <input type="hidden" style="text-align: center;" class="form-control" id="id_Indica" name="id_Indica">
                    <input type="text" class="form-control" id="indicador" name="indicador">
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Envíar</button>
                  </div>

                </form>
              </div>
            </div>
          </div>


      <div class="modal fade" id="eliminarIndicadores" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">¿Desea eliminar el Indicador?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="Acciones/eliminarIndicador.php" method="GET">
                <input type="hidden" style="text-align: center;" class="form-control" id="id_Indic" name="id_Indic">
                <!-- <input type="hidden" name="Pilar" value="1"> -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="nuevaOrganizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Nueva Organización:</h5>
              <a href="organizaciones.php" class="btn btn-default">Organizaciones</a>
            </div>
            <form class="form-group" action="Acciones/nuevaOrganizacion.php" method="get">
              <div class="modal-body">
                <label>Nombre Organización:</label>
                <input type="text" class="form-control" id="Organizacion" name="Organizacion">
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Envíar</button>
              </div>

            </form>
          </div>
        </div>
      </div>


    </div>
  </div>
  <script type="text/javascript">
  function eliminarIndicadores(datos) {
    $('#id_Indic').val(datos);
  }
  function modificarIndicadores(datos){
    d = datos.split('||');
    $('#id_Indica').val(d[0]);
    $('#indicador').val(d[1]);
  }
  </script>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>
