<?php
include_once '../../includes/db2.php';

$consulta = "SELECT * FROM usuarios
             INNER JOIN tipos_de_usuarios
             ON usuarios.tipo_de_usuario = tipos_de_usuarios.id_tipo_de_usuario ORDER BY id;";
$usuarios=$conexion->query($consulta);
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="US-ASCII">
  <title>Lista de Usuario</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
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
                <a href="../pilares/añadirPilares.php?id=0">Generar un nuevo periodo</a>
              </li>
              <li>
                <a href="../pilares/personas.php">Personas</a>
              </li>
              <li>
                <a href="../pilares/planeta.php">Planeta</a>
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
                <a href="nuevosUsuarios.php">Añadir usuarios</a>
              </li>
              <li>
                <a href="verUsuarios.php">Ver usuarios</a>
              </li>
          </li>
        </ul>
        </li>

        </ul>


      </div>
    </nav>


    <!-- Inicio Tabla -->
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
      <h1>Lista de Usuarios SISU</h1>
      <table class="table">
        <thead style="text-align: center">
          <tr class="bg-info">
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nombre de usuario</th>
            <th scope="col">Fecha de registro</th>
            <th scope="col">Tipo de usuario</th>
            <th scope="col">Estatus</th>
            <th scope="col">Puesto</th>
            <th scope="col">Ver Contraseña</th>
            <th scope="col" colspan="2">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
    						$conteo = 0;
    							foreach ($usuarios as $usuario) {
                    $conteo = $conteo + 1;
                    $data = $usuario['nombre']."||".
                            $usuario['username']."||".
                            $usuario['id']."||".
                            $usuario['password'];
    						?>
          <tr>
            <td>
              <?php echo $conteo; ?>
            </td>
            <td>
              <?php echo $usuario['nombre']; ?>
            </td>
            <td style="text-align: center">
              <?php echo $usuario['username']; ?>
            </td>
            <td style="text-align: center">
              <?php echo $usuario['fecha_reg']; ?>
            </td>
            <td style="text-align: center">
              <?php echo $usuario['tipo_de_usuario']; ?>
            </td>
            <td style="text-align: center">
              <?php echo $usuario['estatus']; ?>
            </td>
            <td style="text-align: center">
              <?php echo $usuario['puesto']; ?>
            </td>
            <td style="text-align: center">
              <button style="background-color: transparent; border: none;" type="button" class="editbtn" data-toggle="modal" data-target="#VerPass" onclick="agregaform('<?php echo $usuario['password'];?>')" title="Ver Contraseña">
                <i class="fas fa-eye"></i>
              </button>
            </td>
            <td>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModificarDatos" onclick="modificaForm('<?php echo $data?>')" title="Modificar">
                <i class="far fa-edit"></i>
              </button>
            </td>
            <td>
              <button class="btn btn-danger" data-toggle="modal" data-target="#eliminarUsuario" onclick="eliminarUsuario('<?php echo $usuario['id'];?>')" title="Eliminar">
                <i class="fas fa-trash-alt"></i>
              </button>
          </tr>
          <?php
    					}
						?>
        </tbody>
      </table>
      <!-- Inicio Modal de Contraseña -->
      <div class="modal fade" id="VerPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Contraseña:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="text" style="text-align: center;" class="form-control" id="id" readonly>
            </div>
          </div>
        </div>
      </div>
      <!-- FInal Modal de Contraseña -->
      <!-- Inicio Modal de Modificar -->
      <div class="modal fade" id="ModificarDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Información:</h5>
            </div>
            <form class="form-group" action="Acciones/modificarDatos.php" method="get">
              <input type="hidden" name="id" id="id_usuario">
              <div class="modal-body">
                <label>Nombre Completo:</label>
                <input type="text" class="form-control" id="nombre" name="nombreCompleto">
              </div>
              <div class="modal-body">
                <label class="">Usuario</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
              <div class="modal-body">
                <label>Tipo de Usuario:</label>
                <select class="form-control" name="tipo_de_usuario">
                  <option value="3">Profesor</option>
                  <option value="1">Root</option>
                  <option value="2">Administrador</option>
                </select>
              </div>
              <div class="modal-body">
                <label>Estatus:</label>
                <select class="form-control" name="estatus">
                  <option value="Habilitado">Habilitado</option>
                  <option value="Inhabilitado">Inhabilitado</option>
                </select>
              </div>
              <div class="modal-body">
                <label>Cambiar Contraseña:</label>
              </div>
              <div class="modal-body row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Contraseña:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="password"  name="contraseña">
                </div>
              </div>
              <div class="modal-body row">
                <label for="staticEmail" class="col-sm-3 ">Confirmar Contraseña:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="password2"  name="confirmarContraseña">
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Envíar</button>
              </div>

            </form>
          </div>
        </div>
      </div>
      <!-- FInal Modal de Modificar -->
      <!-- Inicio modal Eliminar -->
      <div class="modal fade" id="eliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">¿Desear eliminar el usuario?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="Acciones/eliminarUsuario.php" method="GET">
                <input type="hidden" style="text-align: center;" class="form-control" id="id_Usr" name="no">
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin modal eliminar -->
    </div>


  </div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
  <script>
    function agregaform(datos) {
      // d = datos.split('||');
      $('#id').val(datos);
    }

    function modificaForm(datos) {
      d = datos.split('||');
      $('#nombre').val(d[0]);
      $('#username').val(d[1]);
      $('#id_usuario').val(d[2]);
      $('#password').val(d[3]);
      $('#password2').val(d[3]);
    }
    function eliminarUsuario(datos) {
      $('#id_Usr').val(datos);
    }
  </script>
</body>

</html>
