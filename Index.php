<?php 
	require("php/conexion.php");
	require("php/LDS.php");
	#require("php/mydoc.php");
?>
<html lang="es">
<head>
	 <!-- Metas -->
	<title> 100 Ingenieros dijeron!</title>
      <meta charset="utf-8"> 
  	  <meta name="description" content="Juego creado por SergiioXs para el primer simpocio del Instituto Tecnologico de Ensenada">
  	  <meta name="author" content="EnsTeamXS">
  	  <meta http-equiv="content-language" content="es">
  	  <link rel="shortcut icon" href="iconnes.png" type="image/x-icon"> 
  	  <link rel="icon" href="iconnes.png" type="image/x-icon"> 
  	  <script type="text/javascript" src='js/jquery-1.9.0.min.js'></script>
  	  <link rel='stylesheet' type='text/css' href='style.css'>
  	    <!-- BOOTSTRAP    --> 
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap.min.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap-theme.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap-theme.min.css'>
       <link rel='stylesheet' type='text/css' href='bootstrap-3.3.2-dist/css/bootstrap-responsive.css'>
       <script src='bootstrap-3.3.2-dist/js/bootstrap.js'></script>
       <script src='bootstrap-3.3.2-dist/js/bootstrap.min.js'></script>
       <script src='bootstrap-3.3.2-dist/js/jquery-1.11.1.min.js'></script>
       <script src="mydoc.js"></script>

  		
</head>
  	<body style="background-image: url(img/background2.png); background-size: 100% 100%; background-repeat: no-repeat; ">
<!-- STRIKES! -->
<div id='strike' style='z-index: 99; position: absolute; width: 100%; height: 100%; background-color: ; opacity: 1; '>
	<center>
		<div id='auto7'></div>
		<div id='auto8'></div>
	</center>
</div>

  	<!-- LOGO -->
  		<img src="img/logo.png" style='margin-left: 27.3%;'>
	<!-- NOMBRE DE EQUIPOS -->  	
		  		<div style='background-color: ; z-index: 1; position: absolute; width: 90%; margin-left: 5%; margin-top: -30px;'>
			  	<div style='float: left; background-image: url(img/logopanel.png); background-size: 100% 100%;'>
			  		
			  		<div style='margin: 20px; background-color: ;'>
		  				<center><div id='auto3'></div></center>
		  			</div>
		  		
		  		</div>
		  			<div style='float: right; background-image: url(img/logopanel.png); background-size: 100% 100%;'>
			  			<div style='margin: 20px; background-color: ;'>
				  			<center><div id='auto4'></div></center>	
		  				</div>
		  			</div>
		  		</div>
  	<!-- PUNTOS -->	
  		<div style='background-color: ; z-index: 1; position: absolute; width: 100%; margin-left: ; margin-top: 60px;'>
	  	<!-- PUNTOS EQUIPO 1-->
	  		<div style='background-image: url(img/minipanel.png); float: left; background-size: 100% 100%; width: 150px; height: 75px; margin-top: -5px;'>
	  			<br>
	  		<center>
	  			<div id='auto1'></div>
	  		</center> <br>
	  		</div>

  		<!-- PUNTOS TOTALES DE LA PARTIDA-->
	  		<div style='background-image: url(img/minipanel.png); background-size: 100% 100%; width: 150px; position: absolute; margin-left: 41.3%; height: 75px; margin-top: -80px;'>
	  			<div id='auto5'></div>
	  		</div>
  		
	  	<!-- PUNTOS EQUIPO 2 -->
	  		<div style='background-image: url(img/minipanel.png); float: right; background-size: 100% 100%; width: 150px; height: 75px; margin-top: -5px;'>
	  			<br><center>
	  				<div id='auto2'></div>
	  			</center><br>
	  		</div>
  		</div>
  		
  		<!-- TABLERO -->
  		<div id='maintable' style='background-image: url(img/panel.png); margin-top: 30px; z-index: 2; background-size: 100% 100%; width: 50%; margin-left: 24%;'>
	  		<br>
	  		<div style=' margin: 50px;'>
	  			<div id='auto6'></div>
  			</div>
  			<br>
  		</div>
<form action='admin.php' method='POST' id='hdn' >
<input name='txt' type='text' id='hdn' autofocus>
<input type='submit' class='btn btn-default'id='hdn'>
</form>
  	</body>
 </html>