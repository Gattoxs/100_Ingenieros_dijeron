<?php
include_once("databases.php");  
$con = new Conexion();
$db = $con->getConexion();
if(is_null($db))
  echo "error";
require("LDS.php");

if(isset($_POST['z'])){
	if($_POST['z'] == 'Update'){
		$row = getData("SELECT Oculto FROM respuestas WHERE Id_Respuesta =".$_POST['Id']);
	if($row[0]['Oculto'])
		$estado = 0;
	else
		$estado = 1;
	  updateTable("UPDATE juego SET Correctaux = 1");
	  updateTable("UPDATE respuestas SET Oculto=$estado WHERE Id_Respuesta = ".$_POST['Id']);
	}

	if($_POST['z'] == "Tablero"){
		MusicOFF();
		updateTable("UPDATE juego SET Pregunta=".$_POST['Id']);
	}

	if($_POST['z'] == "Finalizar"){
		$puntos = getData("SELECT Puntos FROM juego");
		$equipo = getData("SELECT Puntos FROM equipo WHERE Id_Equipo = ".$_POST['Id']);
		$puntos = $puntos[0]['Puntos'] + $equipo[0]['Puntos'];
		updateTable("UPDATE equipo SET Puntos = $puntos WHERE Id_Equipo = ".$_POST['Id']);
		
	}

	if($_POST['z'] == "Remover"){
		updateTable("UPDATE preguntas SET Usado = 1 WHERE Id_Pregunta = ".$_POST['Id']);
		updateTable("UPDATE juego SET Pregunta = -99");
		header("admin.php");
	}

	if($_POST['z'] == "Strike"){
		$Num = $_POST['value'];
		updateTable("UPDATE juego SET Strikes = $Num, Strikeaux = Strikes");
		
	}
	if($_POST['z'] == "Restablecer"){
		switch ($_POST['value']) {
			case 'Puntos':
				updateTable("UPDATE equipo SET Puntos = 0 WHERE Id_Equipo = 1 OR Id_Equipo = 2");
				break;
			case 'Equipos':
				updateTable("UPDATE equipo SET Nombre = 'Team code' WHERE Id_Equipo = 1");
				updateTable("UPDATE equipo SET Nombre = 'and play' WHERE Id_Equipo = 2");
				updateTable("UPDATE equipo SET Puntos = 0 WHERE Id_Equipo = 1 OR Id_Equipo = 2");

				break;
			case 'Respuestas':
				updateTable("UPDATE respuestas SET Oculto = 0 WHERE Oculto = 1");
				break;
			case 'Preguntas':
				updateTable("UPDATE preguntas SET Usado = 0 WHERE Usado = 1");
				break;
			case 'Todo':
				updateTable("UPDATE equipo SET Puntos = 0 WHERE Id_Equipo = 1 OR Id_Equipo = 2");
				updateTable("UPDATE respuestas SET Oculto = 0 WHERE Oculto = 1");
				updateTable("UPDATE preguntas SET Usado = 0 WHERE Usado = 1");
				updateTable("UPDATE equipo SET Nombre = 'Team' WHERE Id_Equipo = 1 OR Id_Equipo = 2");
				break;
			
			default:
				# code...
				break;
		}
	}
}

//GETS
if(isset($_GET['z'])){
		if($_GET['z'] == "NewPreg"){
		// Tomar los valores Cadena y la pregunta
		$str = $_GET['Str'];
		$Pregunta = $_GET['Pregunta'];
		//Insertar la pregunta a la BD
		insertData("INSERT INTO preguntas(Pregunta) VALUES ('".$Pregunta."')");
		//Obtener el Id de la pregunta y hacer las variables Strings
		$idpreg = getData("SELECT Id_Pregunta FROM preguntas WHERE Pregunta = '".$Pregunta."'");
		$respuesta = "";
		$puntos = "";
		$letra = "";
		$x= "x";
		echo $idpreg[0]['Id_Pregunta']."";
		echo $Pregunta."<br> RESPUESTAS: <br>";
		//Desglosar la Cadena dada y obtener las respuestas y los puntos
		for($i=0;$x;$i++){

			if($str[$i] == ":"){
				$i++;
				for($a=$i; $letra != "," || $letra != null;$a++){
					$puntos = $puntos.$str[$a];
					$i++;
					$letra = $str[$i];
				}
				echo $respuesta." - ".$puntos."<br>";
				insertData("INSERT INTO respuestas(Respuesta, Id_Pregunta, Puntos) VALUES ('".$respuesta."', ".$idpreg[0]['Id_Pregunta'].", ".$puntos.")");
			}else{
				$respuesta = $respuesta.$str[$i];
			}
			$x = $str[$i];
		}
	}


	if($_GET['z'] == "Configuraciones"){
		echo "
			<label id='equipos' class='btn btn-default btn-lg' style='width: 100%; margin-top: 5px;'>Equipos</label>
			<label id='juego' class='btn btn-default btn-lg' style='width: 100%; margin-top: 10px;'>Juego</label>
			<label id='cpreguntas'class='btn btn-default btn-lg' style='width: 100%; margin-top: 10px;'>Preguntas</label>
			<label id='extras'class='btn btn-default btn-lg' style='width: 100%; margin-top: 10px;'>Extras</label>
			<br>

			<script type='text/javascript'>
			$(document).ready(function () {
			$('#equipos').on('click', function(){
			        $('#tabla').load('php/configuraciones/equipos.php');  
			  });


			$('#juego').on('click', function(){
			        $('#tabla').load('php/configuraciones/juego.php');  
			  });

			$('#cpreguntas').on('click', function(){
			        $('#tabla').load('php/configuraciones/cpreguntas.php');  
			  });
	
			$('#extras').on('click', function(){
			        $('#tabla').load('php/configuraciones/extra.php');  
			  });


			});

			</script>

					";

	}
}

function MusicOFF(){
SQL("UPDATE juego SET music = 0");
echo "<script>
    $(document).ready( 
        function(){ 
         $('#auto8').load('php/music.php?z=None');
        });
    </script>";
}
?>