<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../');
  }
  ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Añadir usuarios</title>
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
		  		<a href="../index.php" class="img logo rounded-circle mb-5" style="background-image: url(../images/logo.jpg);"></a>
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

        <form action="Acciones/registrarUsuarios.php" method="post">

          <div class="text-center">
            <h2  class="mb-4">Añadir Usuario</h2>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Nombre Completo</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre Completo">
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Nombre del Usuario</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="Username" name="Username" placeholder="Nombre del Usuario">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Contraseña">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPuesto" class="col-sm-3 col-form-label">Puesto</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="Contraseña" name="Puesto" placeholder="Puesto">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Tipo de Usuario:</label>
            <div class="col-sm-9">
              <select  name="tipo_Usuario" id="tipo_Usuario" class=" form-control">
                <option value="3">Responsable de Área</option>
                <option value="2">Administrador</option>
                <option value="1">Root</option>
              </select>
            </div>
          </div> <br><br><br>

          <div class="text-center">
            <input type="submit" class="btn btn-primary mb-2" name="register" value="Enviar">
          </div>
        </form>

      </div>
		</div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
