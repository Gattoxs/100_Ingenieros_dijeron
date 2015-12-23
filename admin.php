<?php 
	require("php/conexion.php");
	require("php/LDS.php");
  if(isset($_POST['txt'])){
    if($_POST['txt'] == "miaumiau"){
      //Do nothing
    }else{
      header("Location: index.php");
    }
  }
	#require("php/mydoc.php");
?>
<html lang="es">
<head>
	 <!-- Metas -->
	<title> 100 Ingenieros dijeron!</title>
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
      <meta charset="utf-8"> 
  	  <meta name="description" content="Juego creado por SergiioXs para el primer simpocio del Instituto Tecnologico de Ensenada">
  	  <meta name="author" content="EnsTeamXS">
  	  <meta http-equiv="content-language" content="es">
  	  <link rel="shortcut icon" href="iconnes.png" type="image/x-icon"> 
  	  <link rel="icon" href="iconnes.png" type="image/x-icon"> 
  	  <script type="text/javascript" src='js/jquery-1.9.0.min.js'></script>
      <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
      <link rel='stylesheet' type='text/css' href='style.css'>
  	    <!-- BOOTSTRAP    --> 
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap.min.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap-theme.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap-theme.min.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap-responsive.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/alertify.core.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/alertify.default.css'>
       <script src='js/alertify.js'></script>
       <script src='js/alertify.min.js'></script>
       <script src='bootstrap-3.3.2-dist/js/bootstrap.js'></script>
       <script src='bootstrap-3.3.2-dist/js/bootstrap.min.js'></script>
       <script src='bootstrap-3.3.2-dist/js/jquery-1.11.1.min.js'></script>

       <script src="mydoc.js"></script>

  		
</head>
<body style="background-image: url(img/background2.png); max-width: 1000px; max-height: 100px; background-repeat: no-repeat; ">

<!-- ALERTAS -->
<div id='alerts' style='position: fixed; width: 100%; z-index: 100;'></div>
  
  <div id='container'>
    <div id='contmargin'>
      <!-- BOTONES PARA SELECCIONAR AL EQUIPO URL(php/teamoptions.php)-->
      <div id='teamoptions'></div>

      <!-- PREGUNTA -->
        <br>
        <div id='pregs' style='width: 97%; margin-left: 1.5%;'></div>
       
      <!-- Respuestas -->
        <div>
           <div id='tabla' style='margin-top: 10px; width: 97%; margin-left: 1.5%;'></div>
        </div>
<label id='config' style='margin-top: 10px; width: 97%; margin-left: 1.5%;' class='btn btn-default'><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configuraciones</label>

    </div>
<script type="text/javascript">
$(document).ready(function () {
  $('#pregs').load("php/pregs.php");
  $("#teamoptions").load("php/teamoptions.php");

  

$('#config').on('click', function(){
        $('#finalizar').removeClass("btn btn-default").addClass("btn btn-default disabled");
        $('#tabla').load('php/functions.php?z=Configuraciones');
        $('#pregs').load("php/pregs.php");  
  });
});

</script>

</body>
</html>


