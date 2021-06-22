<?php
session_start();
  if ($_SESSION['password'] != '3') {
    header('Location: ../');
  }
include_once '../includes/db2.php';

$consulta = "SELECT * FROM areas WHERE id_pilar = 6;";

$areas=$conexion->query($consulta);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Datos Generales</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="../CSS/main.css">
	<link rel="stylesheet" href="../CSS/bootstrap.min.css">

</head>

<body class="bg-image img-responsive">

	<div class="header">
		<div class="header-right">
			<a href=menu.php>Inicio</a>
			<a href=MisAreas/MisIndicadores.php>Mis Indicadores</a>
			<a href="../includes/logout.php">Cerrar Sesión</a>
		</div>
	</div>

	<h1 align="center">Datos Generales</h1>


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

				<!-- Inicio Tabla -->

				<table class="table">
					<thead style="text-align: center">
						<tr class="bg-danger">
							<th scope="col">#</th>
							<th scope="col">Indicador</th>
							<th scope="col">Ver Datos</th>
							<th scope="col">Generar Reporte</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$contador = 0;
							foreach ($areas as $area) {
								$contador = $contador + 1;
						?>
						<tr>
							<td> <?php echo $contador ?> </td>
							<td> <?php echo $area['area']; ?> </td>
							<td style="text-align: center">
								<a style="color: #28292d; text-align:center;" href="Indicadores.php?no=<?php echo $area['id_areas'];?>&ar=<?php echo $area['area'] ?>&año=<?php echo Date("Y") ?>">
									<i class="fas fa-info-circle fa-2x"></i>
								</a>
							</td>
							<td style="text-align: center" >
								<a style="color: red;" href="Reportes/index.php?no=<?php echo $area['id_areas']; ?>">
									<i class="fas fa-file-pdf fa-2x"></i>
								</a>
							</td>
						</tr>
						<?php
					}

						?>
					</tbody>
				</table>

				<div class="modal fade" id="NewArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">Generar reporte</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form class="" action="index.html" method="post">
									<div class="form-group">
										<label for="Indicador">Selecciona el indicador</label><br>
										<select class="pilar" name="pilar">

											<?php
												$conex = mysqli_connect("localhost","root","","sesion");
	                      $res = mysqli_query($conex,"SELECT * FROM areas WHERE id_pilar = 1;");
	                      while ($row = mysqli_fetch_array($res)) {
	                        // code...
	                      ?>

	                      <option value="pilar"><?php echo $row["area"];?></option>

	                    <?php
	                      }
	                      ?>

										</select>
									</div>
									<div class="form-group">
										<label for="Año">Selecciona el año</label><br>
										<select class="pilar" name="pilar">
											<option value="2020">2020</option>
											<option value="2021">2021</option>
										</select>
									</div>
								</form>




							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-primary"><a style="color: fff;" href="Personas/Reportes/index.php">Generar</a></button>
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
