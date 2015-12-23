<?php 
	require("../LDS.php");
	$rows = getData("SELECT Id_Pregunta, Pregunta FROM preguntas");
?>

<center>
	<label id='agregarpreg' class='btn btn-Success' style='float: left; '>Agregar</label>
	<font color='white' size='4'> Preguntas </font>
	<label id='eliminarpreg' class='btn btn-danger' style='float: right; '>Eliminar</label>
</center>
<br>

<table class='table' style='width: 100%;'>
	<tr>
		<th><font color='white'>Pregunta</font></th>
		<th><font color='white'>Respuestas</font></th>
	</tr>
	<?php 
	for ($i= 0; $i < rowCount($rows); $i++) { 
		echo "
		<tr>
			<td>
				<font color='white'>".$rows[$i]['Pregunta']."</font>
			</td>
			<td style='margin-right;'><label class='btn btn-primary' style='width: 100%;'>Ver</label></td>
		</tr>";
	}
	?>

</table>



<script type="text/javascript">
$(document).ready (function () {
	$('#agregarpreg').on('click', function() {
		$('#tabla').load("php/configuraciones/addpreg.php");
	});

});
</script>