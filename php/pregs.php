<!-- PREGUNTAS -->

<?php
	require("LDS.php"); 

	$preguntas = getData("SELECT Pregunta, Id_Pregunta FROM preguntas WHERE Usado = 0;");
?>

<select class='form-control' id='pregunta' name='pregunta' style='width: 70%;'>
    <option value='0'>Selecciona una pregunta</option>
<?php 
    for($i=0;$i < rowCount($preguntas);$i++)
        echo "<option value='".$preguntas[$i]['Id_Pregunta']."'>".$preguntas[$i]['Pregunta']."</option>"; 
?>
</select>

<button class='btn btn-default disabled' id='finalizar' style='width: 28%; margin-top: -35px; float: right; margin-right: .5%;'>Finalizar</button>

<script type="text/javascript">
$(document).ready( function () { 

$("#pregunta").change( function() {
    var val = $(this).val();
    
    if(val != '0'){
        $('#tabla').html("<div style='margin-left: 50%; width: 80%; margin-top: 70px;'><img src='img/loader.gif' alt='' /><br><br><br></div>");
        $('#finalizar').removeClass("btn btn-default disabled").addClass("btn btn-default");
        $('#tabla').load('loadadmin.php?load='+val);
    }else{
        $('#finalizar').removeClass("btn btn-default").addClass("btn btn-default disabled");
        $('#tabla').html("");
    } 
    var dataString = 'z=Tablero&Id='+val;
    $.ajax({
                type: "POST",
                url: "php/functions.php",
                data: dataString,
                success: function(data) {
                   
                }
    });
});

$('#finalizar').on('click', function(){
        var team1 = document.getElementById('op1');
        var team2 = document.getElementById('op2');
        if(team1.checked) {
          team = team1.value;
        } 
        if(team2.checked) {
          team = team2.value;
        }

        var dataString = 'z=Finalizar&Id='+team;

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