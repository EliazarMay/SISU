<?php
session_start();
  if ($_SESSION['password'] != '3') {
    header('Location: ../');
  }
?>
<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="../CSS/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-image img-responsive">

	<div class="header">
		<!-- <a href="#default" class="logo"> <img src="./img/si1.jpeg" alt=""> </a> -->
		<div class="header-right">
			<a href=menu.php>Inicio</a>
			<a href=MisAreas/MisIndicadores.php>Mis Indicadores</a>
			<a href="informacion.php" class="text"><?php echo $_SESSION['nombre']; ?></a>
			<a href="../includes/logout.php">Cerrar Sesión</a>
		</div>
	</div>

	<h1 align="center">Bienvenido (a) <?php echo $_SESSION['nombre'];?></h1>
	<div class="footer" style="
	 position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: black;
   text-align: center;">
	  <h6 style="font-size: 1.5rem;">Version 1.3-beta 26/04/2021</h6>
	</div>

	<div class="container-left">
		<nav class="menu">
			<input type="checkbox" href="#" name="expandmenu" id="expandmenu" class="expandmenu">
			<label class="expandmenu-button" for="expandmenu">
				<span class="lines first-line"></span>
				<span class="lines sec-line"></span>
				<span class="lines third-line"></span>
			</label>
			<a href="Personas.php?año=<?php echo date("Y"); ?>" class="menu-item col1" title="Personas"><i class="fas fa-user-friends"></i></a>
			<a href="Planeta.php?año=<?php echo date("Y"); ?>" class="menu-item col2"><i class="fas fa-globe-americas" title="Planeta"></i></a>
			<a href="Prosperidad.php?año=<?php echo date("Y"); ?>" class="menu-item col3"><i class="fas fa-hand-holding-usd" title="Prosperidad"></i></i></a>
			<a href="Paz.php?año=<?php echo date("Y"); ?>" class="menu-item col4"><i class="fas fa-dove" title="Paz"></i></a>
			<a href="Alianzas.php?año=<?php echo date("Y"); ?>" class="menu-item col5"><i class="fas fa-handshake" title="Alianzas"></i></a>
			<a href="DatosGenerales.php?año=<?php echo date("Y"); ?>" class="menu-item col6"><i class="fas fa-school" title="Datos Generales"></i></a>
		</nav>
	</div>

</body>


</html>
