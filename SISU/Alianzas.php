<?php
session_start();
  if ($_SESSION['password'] != '3') {
    header('Location: ../');
  }
include_once '../includes/db2.php';
$consulta = "SELECT * FROM areas WHERE id_pilar = 5;";
$areas=$conexion->query($consulta);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Alianzas</title>
	<meta charset="utf-8">
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

	<h1 align="center">Alianzas</h1>


	<div class="container-fluid">
		<div class="row row-cols-2">

			<!-- Inico Navbar -->
			<div class="col-3">
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
					<thead style="text-align: center; color: #ffff;">
						<tr class="bg-secondary"  >
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
								<a style="color: #28292d; text-align:center;" href="IndicadoresAlianzas.php?no=<?php echo $area['id_areas'];?>&ar=<?php echo $area['area']?>&sec=<?php echo "Academico"; ?>&año=<?php echo Date("Y") ?>">
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
			</div>
		</div>
	</div>
</body>

</html>
