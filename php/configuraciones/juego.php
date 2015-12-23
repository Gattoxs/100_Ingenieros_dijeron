<?php 
	require("../LDS.php");
	$rows = getData("SELECT * FROM juego");
?>
<body>

	<center>
		<font size='6' color='white'>Juego</font>
	</center>
	<hr>

	<font size='4' color='white'>En pantalla</font>
	<select class='form-control' id='mostrar' >
		<option >Selecciona una opción..</option>
		<option value='0'>Logo</option>
		<option value='-5'>Seleccion de equipos</option>
		<option value='-1'>Puntos x1</option>
		<option value='-2'>Puntos x2</option>
		<option value='-3'>Puntos x3</option>
		<option value='-4'>Hipnosapo</option>
		<option value='-20'>NEW CHALLENGER</option>
		<option value='-105'>Tirado</option>
	</select>
	<br><br>
	<font size='4' color='white'>Musica</font>
	<select class='form-control' id='musica' >
		<option >Selecciona una opción..</option>
		<option value='-6'>Sonic CityEscape</option>
		<option value='-7'>Mario REMIX</option>
		<option value='-8'>Pokemon Champion RED</option>
		<option value='-9'>DBZ Angeles Fuimos</option>
		<option value='-10'>Death Note Opening 1</option>
		<option value='-11'>Shingeki no Kyojin</option>
		<option value='-12'>The legend of Zelda</option>
		<option value='-13'>League of legends Warriors</option>
		<option value='-14'>Iron Man AC/DC</option>
		<option value='-15'>StarWars Imperial March</option>
		<option value='-16'>Heroes of The Storm</option>
		<option value='-17'>Megaman</option>
		<option value='-18'>Deadpool</option>
		<option value='-19'>Umbrella CORP</option>
		<option value='-21'>Digimon 3</option>
		<option value='-22'>Pokemon</option>
		<option value='-23'>One PUnch man</option>
		<option value='-24'>Ranma 1/2</option>
		<option value='-25'>Inuyasha</option>
		<option value='-26'>Sailormoon</option>
		<option value='-27'>Caballeros del zodiaco</option>
	</select>
	<br><br>
	<font size='4' color='white'>Reestablecer</font>
	<select class='form-control' id='control'>
		<option>Selecciona una opción..</option>
		<option value='Puntos'>Puntos de los equipos</option>
		<option value='Equipos'>Los equipos y puntos</option>
		<option value='Respuestas'>Respuestas</option>
		<option value='Preguntas'>Preguntas</option>
		<option value='Todo'>TODO</option>
	</select>
<br>
	<!-- <label id='RA' class='btn btn-success' style='width: 100%;'>Realizar accion</label>-->
</body>
<script type="text/javascript">
	$(document).ready( function () {

$("#mostrar").change( function() {
 
    var val = $(this).val();
    var dataString = 'y=1&z=Tablero&Id='+val;
    
    $.ajax({
                type: "POST",
                url: "php/functions.php",
                data: dataString,
                success: function(data) {
                   
                }
    });
});

$("#musica").change( function() {
 
    var val = $(this).val();
    var dataString = 'y=1&z=Tablero&Id='+val;
    
    $.ajax({
                type: "POST",
                url: "php/functions.php",
                data: dataString,
                success: function(data) {
                   
                }
    });
});

$("#control").change( function() {
 
    var val = $(this).val();
    var dataString = 'z=Restablecer&value='+val;
    
    $.ajax({
                type: "POST",
                url: "php/functions.php",
                data: dataString,
                success: function(data) {
                   $('#pregs').load('php/pregs.php');
                }
    });
});






	});
</script>