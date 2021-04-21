<?php
include_once '../../includes/db2.php';
$id = $_GET['no'];
$consulta = "SELECT indicador, conteo_anual, pil.pilar, ar.area, us.nombre, us.puesto
             FROM indicadores
             LEFT JOIN areas ar ON indicadores.id_area = ar.id_areas
             LEFT JOIN pilares pil ON ar.id_pilar = pil.id_pilar
             LEFT JOIN usuarios us ON ar.id_usuario = us.id
             WHERE id_area = '".$id."';";

$areas=$conexion->query($consulta);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Reportes</title>
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- El script de la librería-->
    <script src="html2pdf.bundle.min.js"></script>
    <!--Nuestro script, que se encarga de crear el PDF usando la librería-->
    <script src="script.js"></script>
    <!-- Algunos estilos -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container" style="border: 3px solid black;">
    <br>
    <button id="btnCrearPdf" style="background-color: transparent; border-color: transparent;"><img src="Logos.png" class="rounded float-left" width="100" height="132" alt=""></button>
    <img src="Logo2.png" class="rounded float-right" width="330" height="132" alt=""><br>
    <hr width=1100 style="border-top: 3px solid;">
    <br> <br> <br> <h1 align="center">Reporte de Indicadores de Sostenibilidad de la Universidad del Caribe</h1> <br> <br>


     <table class="table" tyle="margin: 0 auto;">
       <thead class="thead-dark">
         <tr>
           <th class="bg-dark" style="color: #fff;" colspan="2">Datos Generales</th>
         </tr>
         <?php
           foreach ($areas as $area) {}
         ?>
       </thead>
         <tr>
           <th  style="font-size: .9rem;">Pilar: <?php echo $area['pilar'] ?></th>
         </tr>
         <tr>
           <th style="font-size: .9rem;">Área/Departamento:  <?php echo $area['area'] ?></th>
         </tr>
         <tr>
           <th style="font-size: .9rem;">Nombre del Responsable: <?php echo $area['nombre'] ?> </th>
         </tr>
         <tr>
           <th style="font-size: .9rem;">Puesto del Responsable: <?php echo $area['puesto'] ?></th>
         </tr>
         <tr>
           <th style="font-size: .9rem;">Periodo del Reporte: 1/Enero/2020-31/Diciembre/2020</th>
         </tr>
         <tr>
           <th style="font-size: .9rem;">Fecha de Captura: 11/Enero/2020</th>
         </tr>

     </table>


     <br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>NO.</th>
                <th>Listado de Indicadores</th>
                <th>Anual</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $contador = 0;
            foreach ($areas as $area) {
              $contador = $contador + 1;
          ?>
          <tr>
            <td style="font-size: .9rem;"> <?php echo $contador ?> </td>
            <td style="font-size: .9rem;"> <?php echo $area['indicador']; ?> </td>
            <td style="font-size: .9rem;"><?php echo $area['conteo_anual']; ?> </td>
          </tr>
          <?php
        }

          ?>
        </tbody>
    </table>
    <div class="container" align="center">
      <br><br><br>
      <hr width=400 style="border-top: 3px solid;">
      <h5>VALIDACIÓN DE LA INFORMACIÓN</h5>
      <h6><?php echo $area['nombre'] ?></h6>
      <h6><?php echo $area['puesto'] ?></h6>
      <h6><?php echo $area['area'] ?></h6>

    </div>


  </div>
</body>

</html>
