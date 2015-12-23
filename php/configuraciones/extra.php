<?php 
	require("../LDS.php");
	$rows = getData("SELECT * FROM juego");
	$ppreg = getData("SELECT * FROM pregpublic WHERE usado = 0");
?>
<body>

	<center>
		<font size='6' color='white'>Extras</font>
	</center>
	<hr>

	<font size='4' color='white'>Pregunta al publico</font>
	<select class='form-control' id='ppreg' >
		<option >Selecciona una opción..</option>
		<?php 
			for ($i=500; $i < rowCount($ppreg)+500; $i++) { 
				echo "<option>".$ppreg[$i]['Pregunta']."</option>";
			}
		?>
	</select>
	<br><br>
	
</body>
<script type="text/javascript">
	$(document).ready( function () {

$("#ppreg").change( function() {
 
    var val = $(this).val();
    var dataString = 'z=Tablero&Id='+val;
    
    $.ajax({
                type: "POST",
                url: "php/functions.php",
                data: dataString,
                success: function(data) {
                   
                }
    });
});







	});
</script>