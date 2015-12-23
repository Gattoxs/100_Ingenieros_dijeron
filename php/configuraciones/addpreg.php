<center>
	<font color='white' size='4'> Agregar Pregunta </font>
</center>
<hr>
<center><font color='white' size='3'> Pregunta: </font></center>
<input id='newpregunta' class='form-control'>
<br><br> 

<center>
<label id='rmas' class='btn btn-success' style='float: left;'>+</label>
<font color='white' size='4'> Respuestas: </font> 
<label id='rmen' class='btn btn-danger' style='float: right;'>-</label>
</center>
<!-- <textarea class='form-control' placeholder='Ejemplo: Respuesta:22, Respuesta2:54, respuesta3:4.' id='txtarea'></textarea>
-->
<br>
<div id='contresp1' style='width: 100%;'></div>
<div id='contresp2' style='width: 100%;'></div>
<div id='contresp3' style='width: 100%;'></div>
<div id='contresp4' style='width: 100%;'></div>
<div id='contresp5' style='width: 100%;'></div>
<div id='contresp6' style='width: 100%;'></div>
<div id='contresp7' style='width: 100%;'></div>

<label id='agregarpregbtn' class='btn btn-primary' style='width: 100%; margin-top: 10px;'>Agregar</label>

<script type="text/javascript">
function isset() {

  var a = arguments,
    l = a.length,
    i = 0,
    undef;

  if (l === 0) {
    throw new Error('Empty isset');
  }

  while (i !== l) {
    if (a[i] === undef || a[i] === null) {
      return false;
    }
    i++;
  }
  return true;
}
var cant = 0;
$(document).ready (function () {
	
	$('#rmas').on('click', function () {
		cant = cant + 1; 
		
		if(cant == 1)
			$('#contresp1').html("<input id='r1' class='form-control' type='text' style='margin-top: 10px; width: 70%; float: left;'><input id='p1' type='number' class='form-control' style='margin-top: 10px; width: 28%; float: right;'>");
		if(cant == 2)
			$('#contresp2').html("<input id='r2' class='form-control' style='margin-top: 10px; width: 70%; float: left;'><input id='p2' type='number' class='form-control' style='margin-top: 10px; width: 28%; float: right;'>");
		if(cant == 3)
			$('#contresp3').html("<input id='r3' class='form-control' style='margin-top: 10px; width: 70%; float: left;'><input id='p3' type='number' class='form-control' style='margin-top: 10px; width: 28%; float: right;'>");
		if(cant == 4)
			$('#contresp4').html("<input id='r4' class='form-control' style='margin-top: 10px; width: 70%; float: left;'><input id='p4' type='number' class='form-control' style='margin-top: 10px; width: 28%; float: right;'>");
		if(cant == 5)
			$('#contresp5').html("<input id='r5' class='form-control' style='margin-top: 10px; width: 70%; float: left;'><input id='p5' type='number' class='form-control' style='margin-top: 10px; width: 28%; float: right;'>");
		if(cant == 6)
			$('#contresp6').html("<input id='r6' class='form-control' style='margin-top: 10px; width: 70%; float: left;'><input id='p6' type='number' class='form-control' style='margin-top: 10px; width: 28%; float: right;'>");
		if(cant > 6){
			$('#contresp7').html("<br><br><font color='white' size=3>Ya no puedes agregar mas respuestas.</font>");		
			cant=6;
		}
	});

$('#rmen').on('click', function () { 
	
	if(cant == 1)
		$('#contresp1').html("");
	if(cant == 2)
		$('#contresp2').html("");
	if(cant == 3)
		$('#contresp3').html("");
	if(cant == 4)
		$('#contresp4').html("");
	if(cant == 5)
		$('#contresp5').html("");
	if(cant == 6)
		$('#contresp6').html("");
	$('#contresp7').html("");	

	cant = cant - 1;
	if(cant < 0)
		cant = 0;
	});

$('#agregarpregbtn').on('click', function() {
		
		var acpt = 0, row=0;
		alertify.alert("hello");

	});

});
</script>