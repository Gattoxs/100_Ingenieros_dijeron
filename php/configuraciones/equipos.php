<?php
	require('../LDS.php');
	$rows = getData("SELECT * FROM equipo");
?>

<body>
	<center>
		<font color='white' size='5'> Equipos </font>
	</center>
	<hr>

<!-- Nombre equipo 1 -->
	<center>
		<label id='teams1' style='background-image: url(img/logopanel.png); background-size: 100% 100%; ' value='ARGROS' >
			<div style='margin: 20px;'>
				<?php $teamN1 = getData("SELECT Nombre FROM equipo WHERE Id_Equipo = 1");
			            $String = strtoupper($teamN1[0]['Nombre']."");
			            for($a=0; $a < strlen($String);$a++){
			                    if($String[$a] != " ")
			                        echo "<img src='img/abc/".$String[$a].".png'>";
			                    else
			                        echo "<img src='img/abc/space.png'>";
			            }
			    ?>
			</div>
		</label>
	</center>

<!-- VS -->
	<center>
		<img src="img/VS.png" style='width: 20%;'>
	</center>

<!-- Nombre equipo 2 -->
	<center>
		<label id='teams2' style='background-image: url(img/logopanel.png); background-size: 100% 100%;'>
			<div style='margin: 20px;'>
				<?php $teamN1 = getData("SELECT Nombre FROM equipo WHERE Id_Equipo = 2");
			            $String = strtoupper($teamN1[0]['Nombre']."");
			            for($a=0; $a < strlen($String);$a++){
			                    if($String[$a] != " ")
			                        echo "<img src='img/abc/".$String[$a].".png'>";
			                    else
			                        echo "<img src='img/abc/space.png'>";
			            }
			    ?>
			</div>
		</label>
	</center>
	<script type="text/javascript">

	$('#teams1').on('click', function() { 
		$('#tabla').load('php/configuraciones/editeam.php?id=1');
	});

	$('#teams2').on('click', function() { 
		$('#tabla').load('php/configuraciones/editeam.php?id=2');
	});


</script>
</body>
