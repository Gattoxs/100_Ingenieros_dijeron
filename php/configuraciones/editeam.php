<?php 
	require("../LDS.php");
	if(isset($_GET['id'])){
		$rows = getData("SELECT Nombre, Puntos FROM equipo WHERE Id_Equipo = ".$_GET['id']);
		$Integrantes = getData("SELECT * FROM participantes WHERE Id_Equipo = ".$_GET['id']);
	}
?>
	<center>
		<font color='white' size=6>Equipo <?php echo $_GET['id']?></font>
		<hr>
	</center>

		<font color='white' size=3 style='float: left;'>Nombre del equipo</font>
		<font color='white' size=3 style='float: right;'>Puntos</font><br><br>
		<input id='equip' class='form-control' style='width: 70%; float: left;' <?php echo "value='".$rows[0]['Nombre']."'"; ?> >
		<input class='form-control' style='width: 28%; float: right;' id='eqptos' <?php echo "value='".$rows[0]['Puntos']."'"; ?> type='number'>
		<br><br><br>
		<font color='white' style='float: left;' size=3>Integrantes</font>
		<font color='white' style='float: right;' size=3>Numero de control</font>
		<?php 
			for($i = 0; $i < 5; $i++)
				echo "<input id='int".$i."' class='form-control' style='width: 70%; float: left; margin-top: 5px;' value='".$Integrantes[$i]['Nombre']."'><input id='NC".$i."' class='form-control' value='".$Integrantes[$i]['NC']."' style='width: 28%; float: right; margin-top: 5px;'>";
		
		?>
		<label id='btnediteam' class='btn btn-success' style='width: 100%; margin-top: 5px; float: left;'> Guardar cambios </label>

<script type="text/javascript">
$(document).ready( function () {

	$('#btnediteam').on('click', function () {
		
		//Id del team
		var idteam = "<?php echo $_GET['id']; ?>";
		
		//Nombre del equipo
		var equipo = $('#equip').val();

		//Nombre de los integrantes y sus Numeros de control
		var int0 = $('#int0').val(), NC0 = $('#NC0').val();
		var int1 = $('#int1').val(), NC1 = $('#NC1').val();
		var int2 = $('#int2').val(), NC2 = $('#NC2').val();
		var int3 = $('#int3').val(), NC3 = $('#NC3').val();
		var int4 = $('#int4').val(), NC4 = $('#NC4').val();

		//puntos
		var puntos = $('#eqptos').val();
		
		var dataString = "z=1&id="+idteam+"&equip="+equipo+"&i1="+int0+"&i2="+int1+"&i3="+int2+"&i4="+int3+"&i5="+int4+"&NC1="+NC0+"&NC2="+NC1+"&NC3="+NC2+"&NC4="+NC3+"&NC5="+NC4+"&puntos="+puntos;		
		alertify.alert("Se ha modificado con exito");

		$.ajax({
            type: "POST",
            url: "php/configuraciones/updates.php",
            data: dataString,
            success: function(data) {
               $('#teamoptions').load("php/teamoptions.php");
            } 


            });
	});

});
</script>