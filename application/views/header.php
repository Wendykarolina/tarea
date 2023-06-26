<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CANDIDATOS</title>
    <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <!-- COLOCACION DE APIKEY DE GOOGLE MAPS -->
    	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ9im5myj2rT_iJPbbftxHmOdJWM9PV3g&libraries=places&callback=initMap">
    	</script>

      <style>
      body{
        background-color: #c8ecfe;
      }
      nav{
        background-color:#152632;
      }
      </style>
  </head>
  <body>
    <nav class="navbar navbar-inverses style="color:white"">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url(); ?>/welcome">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url(); ?>/candidatos/nuevos">Ingresar nuevo candidato. <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url(); ?>/candidatos/index"> Listas de candidatos</a></li>
        <li><a href="<?php echo site_url(); ?>/reportes/presidentes"> Reporte de Presidentes</a></li>
        <li><a href="<?php echo site_url(); ?>/reportes/nacionales"> Reporte de Asambleistas Nacionales</a></li>
        <li><a href="<?php echo site_url(); ?>/reportes/provinciales"> Reporte de Asambleistas Provinciales</a></li>
        <li><a href="<?php echo site_url(); ?>/reportes/total"> Reporte Total</a></li>
        <li><a href="<?php echo site_url(); ?>/reportes/izquierdas"> Reporte de Izquierdas</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
