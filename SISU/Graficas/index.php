<?php
session_start();
$id_indicador = $_GET['id_indicador'];
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="US-ASCII">
  <title>Desarrollo Estudiantil</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="../../CSS/main.css">
  <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="librerias/plotly-latest.min.js"></script>
</head>

<body class="bg-image img-responsive">

  <div class="header">
    <!-- <a href="#default" class="logo"> <img src="../img/si1.jpeg" alt=""> </a> -->
    <div class="header-right">
      <a href="../menu.php">Inicio</a>
      <a href=MisAreas/MisIndicadores.php>Mis Indicadores</a>
      <a href="informacion.php" class="text"><?php echo $_SESSION['nombre']; ?></a>
      <a href="../../includes/logout.php">Cerrar Sesión</a>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row row-cols-2">

      <!-- Inico Navbar -->
      <div class="col-3">
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
      <div class="col-9">
				<div class="container">
				  <div class="row">
				    <div class="col-sm-12">
				      <div class="panel panel-primary">
				        <div class="panel panel-heading">
				          <h2 align="center">Gráficas</h2>
				        </div>
				        <div class="panel panel-body">
				          <div class="row">
				            <div class="col-sm-12">
				              <div id="cargaLineal"></div>
				            </div>
				          </div>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>

      </div>
    </div>
  </div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php?id_indicador=<?php echo $id_indicador;?>');
	});
</script>

</html>
