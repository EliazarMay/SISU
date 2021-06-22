<?php
session_start();
  if ($_SESSION['password'] != '3') {
    header('Location: ../');
  }
include_once '../includes/db2.php';
$nombre = $_SESSION['nombre'];
$consulta = "SELECT * FROM usuarios
             INNER JOIN tipos_de_usuarios
             ON usuarios.tipo_de_usuario = tipos_de_usuarios.id_tipo_de_usuario
						 WHERE nombre = '$nombre';";

$areas=$conexion->query($consulta);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Mis informacion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="../CSS/main.css">
	<link rel="stylesheet" href="../CSS/bootstrap.min.css">

</head>

<body class="bg-image img-responsive">

	<div class="header">
		<!-- <a href="#default" class="logo"> <img src="../img/si1.jpeg" alt=""> </a> -->
		<div class="header-right">
			<a href=menu.php>Inicio</a>
			<a href=MisAreas/MisIndicadores.php>Mis Indicadores</a>
      <a href="informacion.php" class="text"><?php echo $_SESSION['nombre']; ?></a>
			<a href="../includes/logout.php">Cerrar Sesión</a>
		</div>
	</div>

	<h1 align="center">Mi información</h1>


	<div class="container-fluid">
		<div class="row row-cols-2">

			<!-- Inico Navbar -->
			<div class="col-3">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

        <table class="table">
					<thead>
						<tr class="bg-info">

							<th scope="col">Nombre</th>
							<th scope="col">Usuario</th>
              <th scope="col">Puesto</th>
              <th scope="col">Fecha de registro</th>
              <th scope="col">Accioness</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($areas as $area) {
						?>
						<tr>
							<td> <?php echo $area['nombre']; ?> </td>
							<td> <?php echo $area['username']; ?> </td>
              <td> <?php echo $area['tipo_de_usuario']; ?> </td>
              <td> <?php echo $area['fecha_reg']; ?> </td>
							<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#NewPass">Cambiar Contraseña</button></td>

						</tr>
						<?php
					}

						?>
					</tbody>
				</table>
				<div class="modal fade" id="NewPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">Cambiar Contraseña</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form class="" action="Acciones/cambiarContraseña.php" method="post">
									<input type="hidden" name="id" value="<?php echo $area['id'];?>">
									<div class="form-group">
									<label for="NewPass">Nueva Contraseña:</label><br>
									<input type="text" name="Contraseña" id="Contraseña" class="form-control"><br>
								</div>
								<div class="form-group">
									<label for="Confirm">Confirmar:</label><br>
									<input type="text" name="confContraseña" id="confContraseña" class="form-control">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									<button type="submit" class="btn btn-success">Guardar</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../admin/js/jquery.min.js"></script>
	<script src="../admin/js/popper.js"></script>
	<script src="../admin/js/bootstrap.min.js"></script>
	<script src="../admin/js/main.js"></script>

</body>

</html>
