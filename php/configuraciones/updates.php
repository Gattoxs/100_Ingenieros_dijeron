<?php 
require('../LDS.php');
if(isset($_POST['z'])){
	switch ($_POST['z']) {
		case 1: //Update teams
			updateTable("UPDATE equipo SET Nombre = '".$_POST['equip']."', Puntos = ".$_POST['puntos']." WHERE Id_Equipo = ".$_POST['id']);

			$index = 0;
			if($_POST['id'] == 2)
				$index = 5;

			for($i = 1; $i <= 5; $i++)
				updateTable("UPDATE Participantes SET Nombre = '".$_POST['i'.$i]."', NC = ".$_POST['NC'.$i]." WHERE Id_Participante = ".($i+$index));
			

			break;
		
		default:
			# code...
			break;
	}

}

?>