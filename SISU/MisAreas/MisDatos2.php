<?php
include '../../includes/db2.php';
session_start();
$nombre = $_GET['id_area'];
$alumnos="SELECT ind.id_indicador, ind.indicador, ind.periodo_1, ind.periodo_2, ind.periodo_3, ind.conteo_anual, ind.enlace
FROM indicadores ind
INNER JOIN areas ar ON ind.id_area = ar.id_areas
WHERE ind.id_area = '$nombre' AND ind.periodo_1 = 0 AND ind.periodo_2 = 0 AND ind.periodo_3 = 0 AND ind.conteo_anual = 0";
$resAlumnos=$conexion->query($alumnos);
?>

<html lang="es">

	<head>
		<title>Mis Indicadores</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<link rel="stylesheet" href="../../CSS/main.css">
		<link rel="stylesheet" href="../../CSS/bootstrap.min.css">
	</head>

	<body class="bg-image img-responsive">
		<script type="text/javascript">
		function sumar(){
		  var num1 = document.getElementById('num1').value;
		  var num2 = document.getElementById('num2').value;
		  var num3 = document.getElementById('num3').value;

		  if (num1 == '') {
		    num1 = 0;
		  }
		  if (num2 == '') {
		    num2 == 0;
		  }
		  if (num3 == '') {
		    num3 == 0;
		  }
		  var sumar = parseInt(num1) + parseInt(num2) + parseInt(num3);
		  document.getElementById('resultado').value = sumar;
		}

		</script>
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

			<form method="post">
			<table class="table">
				<thead>

				<tr class="bg-info">
					<th>#</th>
					<th>Indicador</th>
					<th>Primavera</th>
					<th>Otoño</th>
					<th>Verano</th>
					<th style="text-align: center;">Conteo Anual</th>
					<th style="text-align: center;">Enlace a Drive</th>
				</tr>

				</thead>
				<?php

				$contador = 0;
				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
					$contador = $contador + 1;
					echo'<tr>

						<td hidden><input name="idalu[]" value="'.$registroAlumnos['id_indicador'].'" /></td>
						 <td>'.$contador.'</td>
						 <td>'.$registroAlumnos['indicador'].'</td>
						 <td><input type="number" class="form-control" name="carr['.$registroAlumnos['id_indicador'].']" id="num1" value="'.$registroAlumnos['periodo_1'].'" onkeyup="sumar();" /></td>
						 <td><input type="number" class="form-control" name="gru['.$registroAlumnos['id_indicador'].']" id="num2" value="'.$registroAlumnos['periodo_2'].'" onkeyup="sumar();"/></td>
						 <td><input type="number" class="form-control" name="otoñ['.$registroAlumnos['id_indicador'].']" id="num3" value="'.$registroAlumnos['periodo_3'].'" onkeyup="sumar();"/></td>
						 <td><input type="number" class="form-control" name="res['.$registroAlumnos['id_indicador'].']" id="resultado" value="'.$registroAlumnos['conteo_anual'].'"/></td>
						 <td><input type="text" class="form-control" name="enla['.$registroAlumnos['id_indicador'].']" value="'.$registroAlumnos['enlace'].'"/></td>
						 </tr>';
				}


				?>
<?php error_reporting(0); ?>
			</table>
			<input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
		</form>

		<?php

			if(isset($_POST['actualizar']))
			{
				foreach ($_POST['idalu'] as $ids)
				{

					$editNom=mysqli_real_escape_string($conexion, $_POST['carr'][$ids]);
					$editCarr=mysqli_real_escape_string($conexion, $_POST['gru'][$ids]);
					$editGru=mysqli_real_escape_string($conexion, $_POST['otoñ'][$ids]);
					$editCont=mysqli_real_escape_string($conexion, $_POST['res'][$ids]);
					$editEnlac=mysqli_real_escape_string($conexion, $_POST['enla'][$ids]);

					$actualizar=$conexion->query("UPDATE indicadores SET  periodo_1='$editNom', periodo_2='$editCarr',
																		periodo_3='$editGru', conteo_anual='$editCont', enlace='$editEnlac' WHERE id_indicador='$ids'");
				}

				if($actualizar==true)
				{
					echo '<script>';
					echo 'alert("Datos actualizados correctamente");';
					echo 'window.location.href="MisIndicadores.php";';
					echo '</script>';
				}

				else
				{
					echo "No se pudieron actualizar los datos correctamente";

				}
			}

		?>
	</div>
	</div>
	</div>
	</body>

</html>
