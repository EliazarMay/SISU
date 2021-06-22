<?php
session_start();
  if ($_SESSION['password'] != '1') {
    header('Location: ../../');
  }
$id_indicador = $_GET['id_indicador'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gráficos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/style.css">
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="librerias/plotly-latest.min.js"></script>
</head>
<body>
  <div class="wrapper d-flex align-items-stretch">
  <nav id="sidebar">

    <div class="p-4 pt-5">

      <a href="index.html" class="img logo rounded-circle mb-5" style="background-image: url(../../images/logo.jpg);"></a>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pilares</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="../añadirPilares.php?id=1&año_ref=<?php echo Date("Y"); ?>">Generar un nuevo periodo</a>
            </li>
            <li>
                <a href="../personas.php">Personas</a>
            </li>
            <li>
                <a href="../planet.php">Planeta</a>
            </li>
            <li>
                <a href="../prosperidad.php">Prosperidad</a>
            </li>
            <li>
                <a href="../paz.php">Paz</a>
            </li>
            <li>
                <a href="../alianzas.php">Alianzas</a>
            </li>
            <li>
                <a href="../datosGenerales.php">Datos Generales</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuarios</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="../../usuarios/nuevosUsuarios.php">Añadir Usuarios</a>
            </li>
            <li>
                <a href="../../usuarios/verUsuarios.php">Ver Usuarios</a>
            </li>
          </ul>
        </li>

      </ul>


    </div>
  </nav>
  <div id="content" class="p-4 p-md-5">
    <a href="../../../includes/logout.php">Cerrar Sesión</a>
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
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php?id_indicador=<?php echo $id_indicador;?>');
	});
</script>
<!-- <script src="../../js/jquery.min.js"></script> -->
<script src="../../js/popper.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>
