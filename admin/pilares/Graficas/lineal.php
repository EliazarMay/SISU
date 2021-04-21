
<?php
require_once "../../../includes/db2.php";

$sql = "SELECT indicador,periodo_1,periodo_2,periodo_3 from indicadores where id_indicador = '".$_GET['id_indicador']."'";
$result =$conexion->query($sql);

$valoresY = array();
// $valoresX = array();

while ($ver = mysqli_fetch_row($result)) {
		$valoresY[] = $ver[1]; //monto
		$valoresY2[] = $ver[2]; //monto
		$valoresY3[] = $ver[3]; //monto
	}

	// $datosX = json_encode($valoresX);
	$datosY = json_encode($valoresY);
	$datosY2 = json_encode($valoresY2);
	$datosY3 = json_encode($valoresY3);
	?>
	<div id="graficaLineal"></div>


	<script type="text/javascript">

		function crearCadenaLineal(json){
			var parsed = JSON.parse(json);
			var arr = [];
			for (var x in parsed) {
				arr.push(parsed[x]);
			}

			return arr;
		}

	</script>

	<script type="text/javascript">


		datosY = crearCadenaLineal('<?php echo $datosY; ?>');
		datosY2 = crearCadenaLineal('<?php echo $datosY2; ?>');
		datosY3 = crearCadenaLineal('<?php echo $datosY3; ?>');
		let nuevoArreglo = datosY.concat(datosY2,datosY3);
		var trace1 = {
			x: ['primavera','verano','otoño'],
			y: nuevoArreglo,
			type: 'scatter',
			line: {
				color: '#13e1de',
				width: 2
			},
			marker: {
				color: '#0e153b',
				size: 10
			}
		}

		var layout = {
			title: 'Universidad del Caribe',
			xaxis: {
				title: 'Periodos'
			},
			yaxis: {
				title: 'Indicadores'
			}
		};

		var data = [trace1];

		Plotly.newPlot('graficaLineal', data, layout);
	</script>
