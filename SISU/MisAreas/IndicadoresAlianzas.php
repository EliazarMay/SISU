<?php
session_start();
  if ($_SESSION['password'] != '3') {
    header('Location: ../../');
  }
include_once '../../includes/db2.php';
$nombre = $_SESSION['nombre'];
$consulta = "SELECT ar.id_areas,ar.area, us.nombre FROM areas ar
INNER JOIN usuarios us ON ar.id_usuario = us.id
WHERE us.nombre = '$nombre'";

$areas=$conexion->query($consulta);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Mis Areas Asignadas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="../../CSS/main.css">
	<link rel="stylesheet" href="../../CSS/bootstrap.min.css">

</head>

<body class="bg-image img-responsive">

	<div class="header">
		<!-- <a href="#default" class="logo"> <img src="../img/si1.jpeg" alt=""> </a> -->
		<div class="header-right">
			<a href=../menu.php>Inicio</a>
			<a href="../informacion.php" class="text"><?php echo $_SESSION['nombre']; ?></a>
			<a href="../../includes/logout.php">Cerrar Sesión</a>
		</div>
	</div>

	<h1 align="center">Mis Areas Asignadas</h1>


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
					<a href="../Personas.php?año=<?php echo Date("Y"); ?>" class="menu-item col1"><i class="fas fa-user-friends"></i></a>
					<a href="../Planeta.php?año=<?php echo Date("Y"); ?>" class="menu-item col2"><i class="fas fa-globe-americas"></i></a>
					<a href="../Prosperidad.php?año=<?php echo Date("Y"); ?>" class="menu-item col3"><i class="fas fa-hand-holding-usd"></i></i></a>
					<a href="../Paz.php?año=<?php echo Date("Y"); ?>" class="menu-item col4"><i class="fas fa-dove"></i></a>
					<a href="../Alianzas.php?año=<?php echo Date("Y"); ?>" class="menu-item col5"><i class="fas fa-handshake"></i></a>
					<a href="../DatosGenerales.php?año=<?php echo Date("Y"); ?>" class="menu-item col6"><i class="fas fa-school"></i></a>
				</nav>

			</div>
			<!-- Final Navbar -->
			<div class="col-8">

				<!-- Inicio Tabla -->

				<table class="table">
					<thead>
						<tr class="bg-danger">
							<th scope="col">Indicador</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($areas as $area) {
						?>
						<tr>
							<td> <?php echo $area['area']; ?> </td>
							<td> <a href="DatosAlianzas.php?id_area=<?php echo $area['id_areas']; ?>">Ver</a> </td>
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
