<?php
include("db/import_db.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/customColors.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario</title>
</head>

<body>
  <video src="img/video.mp4" id="vidFondo"></video>

  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Bienes Intelcost</h1>
    </div>
    <div class="colFiltros">
      <form action="busqueda.php" method="post" id="formulario">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h5>Filtros</h5>
          </div>
          <div class="filtroCiudad input-field">
            <p><label for="selectCiudad">Ciudad:</label><br></p>
              <select name="Ciudad" id="selectCiudad">

                    <?php
                      $sql = "SELECT DISTINCT Ciudad FROM datos_generales";
                      $result = mysqli_query($connect,$sql);
                      while($mostrar= mysqli_fetch_array($result)){
                          echo "<option value='".$mostrar['Ciudad']."' name='Ciudad'>{$mostrar['Ciudad']} </option>";
                      }
                    ?>
              </select>
          </div>
          <div class="filtroTipo input-field">
            <p><label for="selecTipo">Tipo:</label></p>
            <br>
            <select name="Tipo" id="selectTipo">
                    <?php
                      $sql = "SELECT DISTINCT Tipo FROM datos_generales";
                      $result = mysqli_query($connect,$sql);
                      while($mostrar= mysqli_fetch_array($result)){
                          echo "<option value='".$mostrar['Tipo']."' name='Tipo'>{$mostrar['Tipo']} </option>";
                      }
                    ?>
              </select>
          </div>
          <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div>
          <div class="botonField">
            <input type="submit" class="btn white" value="Buscar" id="submitButton">
          </div>
        </div>
      </form>
    </div>
    <div id="tabs" style="width: 75%;">
      <ul>
        <li><a href="#tabs-1">Bienes disponibles</a></li>
      </ul>
      <div id="tabs-1">
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card">
         
             <a href="index.php"> Volver a Inicio</a>
          
            <?php
                $consultaCiudad=$_POST['Ciudad'];
                $consultaTipo=$_POST['Tipo'];
                $sql = "SELECT * FROM datos_generales WHERE  Ciudad='".$consultaCiudad."' AND Tipo='".$consultaTipo."'";
                $result = mysqli_query($connect,$sql);
                $row_cnt = $result->num_rows;
                printf("<h5>Resultados de la búsqueda: $row_cnt</h5>");
              while($mostrar= mysqli_fetch_array($result)){
            ?>
            
            <div class="tituloContenido card" style="display:block !important; width:100%;height:200px;">
              <div><img src="img/home.jpg" style="width:250px;position:absolute;left:10px;padding:10px;"></div>
                    <div style="width:300px;position:relative;left:250px;padding:10px; margin-top:10px;">
                    Dirección:<?php echo $mostrar['Direccion']?></div>
                    <div style="width:300px;position:relative;left:250px;">
                    Ciudad:<?php echo $mostrar['Ciudad']?></div>
                    <div style="width:300px;position:relative;left:250px;">
                    Telefono:<?php echo $mostrar['Telefono']?></div>
                    <div style="width:300px;position:relative;left:250px;">
                    Código Postal:<?php echo $mostrar['Codigo_Postal']?></div>
                    <div style="width:300px;position:relative;left:250px;">
                    Tipo:<?php echo $mostrar['Tipo']?></div>
                    <div style="width:300px;position:relative;left:250px;">
                    Precio:<?php echo $mostrar['Precio']?></div>
            </div>


            <?php
            
              }
              
              ?>
                        
            <div class="divider"></div>
            <a href="index.php"> Volver a Inicio</a>
          </div>
        </div>
      </div>
              
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/buscador.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
          $( "#tabs" ).tabs();
      });
    </script>
  </body>
  </html>
    