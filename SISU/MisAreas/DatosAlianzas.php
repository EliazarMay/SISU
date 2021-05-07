<?php
include '../../includes/db2.php';
session_start();
$id = $_GET['no'];
$sec = $_GET['sec'];
$consulta = "SELECT * FROM indicadores WHERE id_area = '$id' AND sector = '$sec';";
$resAlumnos=$conexion->query($consulta);
?>

<html lang="es">

<head>
	<title>Mis Indicadores</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="../../CSS/main.css">
	<link rel="stylesheet" href="../../CSS/bootstrap.min.css">

</head>

<body class="bg-image img-responsive">

	<div class="header">
		<!-- <a href="#default" class="logo"> <img src="../img/si1.jpeg" alt=""> </a> -->
		<div class="header-right">
			<a href=../menu.php>Inicio</a>
			<a href=MisIndicadores.php>Mis Indicadores</a>
			<a href="../../includes/logout.php">Cerrar Sesión</a>
		</div>
	</div>
	<h1 align="center">Mis Indicadores</h1>

	<div class="container-fluid">
		<div <div class="row row-cols-2">

			<div class="col-3">
				<nav class="menu">
					<input type="checkbox" href="#" name="expandmenu" id="expandmenu" class="expandmenu">
					<label class="expandmenu-button" for="expandmenu">
						<span class="lines first-line"></span>
						<span class="lines sec-line"></span>
						<span class="lines third-line"></span>
					</label>
					<a href="../Personas.php" class="menu-item col1"><i class="fas fa-user-friends"></i></a>
					<a href="../Planeta.php" class="menu-item col2"><i class="fas fa-globe-americas"></i></a>
					<a href="../Prosperidad.php" class="menu-item col3"><i class="fas fa-hand-holding-usd"></i></i></a>
					<a href="../Paz.php" class="menu-item col4"><i class="fas fa-dove"></i></a>
					<a href="../Alianzas.php" class="menu-item col5"><i class="fas fa-handshake"></i></a>
					<a href="../MisDatos.php" class="menu-item col6"><i class="fa fa-info"></i></a>
				</nav>

			</div>
			<div class="col-8">
				<button type="button" data-toggle="modal" data-target="#nuevoIndicador" class="btn btn-success">Nueva Organización</button>
				<a class="btn btn-primary" href="DatosAlianzas.php?no=29&ar=Alianzas&sec=Academico" role="button">Sector Académico</a>
				<a class="btn btn-secondary" href="DatosAlianzas.php?no=29&ar=Alianzas&sec=Publico" role="button">Sector Público</a>
				<a class="btn btn-warning" href="DatosAlianzas.php?no=29&ar=Alianzas&sec=Privado" role="button">Sector Privado</a>
				<a class="btn btn-info" href="DatosAlianzas.php?no=29&ar=Alianzas&sec=Sociedad Civil" role="button">Sector de la Sociedad Civil</a>
				      <button type="button" data-toggle="modal" data-target="#nuevaOrganizacion" class="btn btn-dark">Nueva Colaboración</button> <br><br>
				<div class="modal fade" id="nuevaOrganizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">Nueva Colaboración:</h5>
							</div>
							<form class="form-group" action="../Acciones/nuevaOrganizacion.php" method="get">
								<div class="modal-body">
									<label>Nombre Colaboración:</label>
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
				<form method="post">
					<table class="table">
						<thead style="text-align: center; color: #ffff;">
							<tr class="bg-secondary">
								<th scope="col">#</th>
								<th scope="col">Indicador</th>
								<th scope="col">Tipo de Colaboración</th>
								<th scope="col">Especificar</th>
							</tr>
						</thead>
						<tbody>
							<?php
						$contador = 0;
							foreach ($resAlumnos as $area2) {
								$contador = $contador + 1;
						?>
							<tr>
								<td> <?php echo $contador ?> </td>
								<td> <?php echo $area2['indicador']; ?> </td>
								<td style="text-align: center">
									<select class="form-control" name="Responsable">
										<?php
                  $res = mysqli_query($conexion,"SELECT * FROM esquemas_colaboracion ");
                  while ($row = mysqli_fetch_array($res)) {
                    ?>
										<option value="<?php echo $row["esquema"]; ?>"><?php echo $row["esquema"];?></option>
										<?php
                  }
                  ?>
									</select>
								</td>
								<td style="text-align: center">
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</td>
								<td style="text-align: center">

								</td>
							</tr>
							<?php
					}

						?>
						</tbody>
					</table>
					<input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
				</form>
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
								<form class="" action="../Acciones/nuevoIndicadorAlianzas.php" method="GET">
									<div class="form-group">
										<label for="pilar">Nombre Organización</label>
										<input type="text" name="Indicador" value="" class="form-control">
									</div>
									<div class="form-group">
										<label for="pilar" >Area:</label><br>
										<select class="form-control" name="areasIndicadores">
											<option value="29">Alianzas</option>
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

			</div>
		</div>
	</div>
</body>
<script src="../../admin/js/jquery.min.js"></script>
<script src="../../admin/js/popper.js"></script>
<script src="../../admin/js/bootstrap.min.js"></script>
<script src="../../admin/js/main.js"></script>

</html>
