<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../');
  }
include_once '../../includes/db2.php';
$consulta = "SELECT * FROM areas
             INNER JOIN usuarios ON
             areas.id_usuario = usuarios.id
             WHERE id_pilar = 3;";
$areas=$conexion->query($consulta);
?>

<!doctype html>
<html lang="en">

<head>
  <title>Prosperidad</title>
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
      <h1>Prosperidad</h1>
      <button type="button" data-toggle="modal" data-target="#NewIndicador" class="form-group">Nueva Área</button>
      <!-- Final Contenido de la Página -->
      <table class="table">
        <thead>
          <tr class="bg-info">
            <th scope="col">#</th>
            <th scope="col">Indicador</th>
            <th scope="col" style="text-align: center">Ver Datos</th>
            <th scope="col" style="text-align: center">Responsable</th>
            <th scope="col" style="text-align: center">Generar Reporte</th>
            <th scope="col" colspan="3" style="text-align: center">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $conteo = 0;
              foreach ($areas as $area) {
                $conteo = $conteo + 1;
                $data = $area['area']."||".
                $area['año']."||".
                $area['id_areas'];
            ?>
            <tr>

              <td>
                <?php echo $conteo ?>
              </td>
              <td>
                <?php echo $area['area']; ?>
              </td>

              <td style="text-align: center">
                <a style="color: #0e153b; text-align:center;" title="Ver Datos"
                   href="indicadores.php?no=<?php echo $area['id_areas'];?>&ar=<?php echo $area['area'] ?>">
                  <i class="fas fa-info-circle fa-2x"></i>
                </a>
              </td>

              <td style="text-align: center">
                <?php echo $area['nombre']; ?>
              </td>

              <td style="text-align: center">
                <a style="color: #41c963;" href="Acciones/Reportes/index.php?no=<?php echo $area['id_areas']; ?>" title="Generar Reporte">
                  <i class="fas fa-file-pdf fa-2x"></i>
                </a>
              </td>

              <td style="text-align: center">
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModificarDatos" onclick="modificaForm('<?php echo $data?>')" title="Modificar">
                    <i class="far fa-edit"></i>
                  </button>
              </td>

              <td style="text-align: center">
                  <button class="btn btn-danger" data-toggle="modal" data-target="#eliminarArea" onclick="eliminarArea('<?php echo $area['id_areas'];?>')" title="Eliminar">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </a>
              </td>

            </tr>
          <?php
          }

            ?>
        </tbody>
      </table>
      <div class="modal fade" id="NewIndicador" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Nueva Área</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="Acciones/añadirArea.php" method="POST">

                <div class="form-group">
                  <label for="pilar">Nombre Área</label>
                  <input type="text" name="Area" value="" class="form-control">
                </div>

                <div class="form-group">
                  <label for="pilar">Año</label>
                  <input type="number" name="Año" class="form-control" value="<?php echo date('Y');?>">
                </div>

                <div class="form-group">
                  <label for="pilar">Periodo Inicial</label>
                    <select class="form-control" name="PeriodoInicial">
                      <option value="Enero">Enero</option>
                      <option value="Febrero">Febrero</option>
                      <option value="Marzo">Marzo</option>
                      <option value="Abril">Abril</option>
                      <option value="Mayo">Mayo</option>
                      <option value="Junio">Junio</option>
                      <option value="Julio">Julio</option>
                      <option value="Agosto">Agosto</option>
                      <option value="Septiembre">Septiembre</option>
                      <option value="Octubre">Octubre</option>
                      <option value="Noviembre">Noviembre</option>
                      <option value="Diciembre">Diciembre</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="pilar">Periodo Final</label>
                    <select class="form-control" name="PeriodoFinal">
                      <option value="Enero">Enero</option>
                      <option value="Febrero">Febrero</option>
                      <option value="Marzo">Marzo</option>
                      <option value="Abril">Abril</option>
                      <option value="Mayo">Mayo</option>
                      <option value="Junio">Junio</option>
                      <option value="Julio">Julio</option>
                      <option value="Agosto">Agosto</option>
                      <option value="Septiembre">Septiembre</option>
                      <option value="Octubre">Octubre</option>
                      <option value="Noviembre">Noviembre</option>
                      <option value="Diciembre">Diciembre</option>
                    </select>
                </div>

                <input type="hidden" name="Pilar" value="3">
                <div class="form-group">
                  <label for="pilar">Responsable:</label><br>
                  <select class="form-control" name="Responsable">
                    <?php
                        $res = mysqli_query($conexion,"SELECT * FROM usuarios ");
                        while ($row = mysqli_fetch_array($res)) {
                          // code...
                        ?>

                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"];?></option>

                    <?php
                        }
                        ?>
                  </select>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="ModificarDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Información:</h5>
            </div>
            <form class="form-group" action="Acciones/modificarDatos.php" method="get">

              <input type="hidden" name="id_area" id="id_areas2">

              <div class="modal-body">
                <label>Área:</label>
                <input type="text" class="form-control" id="nombre" name="nombreArea">
              </div>
              <div class="modal-body">
                <label class="">Año:</label>
                <input type="text" class="form-control" id="años" name="año">
              </div>
              <div class="modal-body">
                <label for="pilar">Periodo Inicial:</label>
                <select class="form-control" name="PeriodoInicial">
                  <option value="Enero">Enero</option>
                  <option value="Febrero">Febrero</option>
                  <option value="Marzo">Marzo</option>
                  <option value="Abril">Abril</option>
                  <option value="Mayo">Mayo</option>
                  <option value="Junio">Junio</option>
                  <option value="Julio">Julio</option>
                  <option value="Agosto">Agosto</option>
                  <option value="Septiembre">Septiembre</option>
                  <option value="Octubre">Octubre</option>
                  <option value="Noviembre">Noviembre</option>
                  <option value="Diciembre">Diciembre</option>
                </select>
              </div>
              <div class="modal-body">
                <label for="pilar">Periodo Final:</label>
                <select class="form-control" name="PeriodoFInal">
                  <option value="Enero">Enero</option>
                  <option value="Febrero">Febrero</option>
                  <option value="Marzo">Marzo</option>
                  <option value="Abril">Abril</option>
                  <option value="Mayo">Mayo</option>
                  <option value="Junio">Junio</option>
                  <option value="Julio">Julio</option>
                  <option value="Agosto">Agosto</option>
                  <option value="Septiembre">Septiembre</option>
                  <option value="Octubre">Octubre</option>
                  <option value="Noviembre">Noviembre</option>
                  <option value="Diciembre">Diciembre</option>
                </select>
              </div>
              <input type="hidden" name="Pilar" value="3">
              <div class="modal-body">
                <label for="pilar">Responsable:</label><br>
                <select class="form-control" name="Responsable">
                  <?php
                  $resa = mysqli_query($conexion,"SELECT * FROM usuarios ");
                  while ($rowa = mysqli_fetch_array($resa)) {
                    ?>
                    <option value="<?php echo $rowa["id"]; ?>"><?php echo $rowa ["nombre"];?></option>
                    <?php
                  }
                  ?>
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


      <div class="modal fade" id="eliminarArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">¿Desea eliminar el area?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="Acciones/eliminarArea.php" method="GET">
                <input type="hidden" style="text-align: center;" class="form-control" id="id_Ar" name="no">
                <input type="hidden" name="Pilar" value="1">
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
  </div>
<script type="text/javascript">
function modificaForm(datos) {
  d = datos.split('||');
  $('#nombre').val(d[0]);
  $('#años').val(d[1]);
  $('#id_areas2').val(d[2]);
}
function eliminarArea(datos) {
  $('#id_Ar').val(datos);
}
</script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>
