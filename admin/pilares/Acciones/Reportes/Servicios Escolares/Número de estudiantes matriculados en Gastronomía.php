<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Gráficas</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="../../../../CSS/main.css">
  <link rel="stylesheet" href="../../../../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../CSS/bootstrap.css">
  <script src="../../../../CSS/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="../../../../CSS/plotly-latest.min.js" charset="utf-8"></script>
</head>
<body>
  <div class="header">
    <!-- <a href="#default" class="logo"> <img src="../img/si1.jpeg" alt=""> </a> -->
    <div class="header-right">
      <a href=../../../../index.php>Inicio</a>
      <a href="../../../../includes/logout.php">Cerrar Sesión</a>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row row-cols-2">


  <div class="col-3">
    <nav class="menu">
      <input type="checkbox" href="#" name="expandmenu" id="expandmenu" class="expandmenu">
      <label class="expandmenu-button" for="expandmenu">
        <span class="lines first-line"></span>
        <span class="lines sec-line"></span>
        <span class="lines third-line"></span>
      </label>
      <a href="../../../Personas.php" class="menu-item col1"><i class="fas fa-user-friends"></i></a>
      <a href="../../../Planeta.php" class="menu-item col2"><i class="fas fa-globe-americas"></i></a>
      <a href="../../../Prosperidad.php" class="menu-item col3"><i class="fas fa-hand-holding-usd"></i></i></a>
      <a href="../../../Paz.php" class="menu-item col4"><i class="fas fa-dove"></i></a>
      <a href="../../../Alianzas.php" class="menu-item col5"><i class="fas fa-handshake"></i></a>
      <a href="../../../MisDatos.php" class="menu-item col6"><i class="fa fa-info"></i></a>
    </nav>

  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-primary">
          <div class="panel panel-heading">
            Gráficas
          </div>
          <div class="panel panel-body">
            <div class="row">
              <div class="col-sm-12">
                <div id="CargaLineal"></div>
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
      $('#CargaLineal').load('lineal2.php');
    });
</script>
