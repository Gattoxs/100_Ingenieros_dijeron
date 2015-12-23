<head>
  <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
<?php
  require("php/conexion.php");
  require("php/LDS.php");
            if(!isset($_GET['load'])){
              $_GET['load'] = 0;
            }
            $respuestas = getData("SELECT * FROM respuestas WHERE Id_Pregunta =".$_GET['load']." 
                                  ORDER BY Puntos DESC"); 
            $Nresp = rowCount($respuestas);
            $aciertos = getData("SELECT sum(Oculto) as Total FROM respuestas WHERE Id_Pregunta = ".$_GET['load']);
            if($Nresp == 0)
            {
              
            }else{
          ?>

          <table class='table' style='background-color: white; border-radius: 0px 0px 15px 15px;'>
            
            <tr>
              <th>Respuesta</th>
              <th id='Puntos'>Puntos</th>
              <th style='text-align: right;'>Mostrar</th>
            </tr>
              <?php 
                for($i=0;$i<rowCount($respuestas);$i++){
                  if($respuestas[$i]['Oculto']){
                    $color = "#5cb85c";
                    $txt= "Ocultar";
                    $txtcolor = "white";
                    $btncolor = "default";
                  }
                  else{
                    $color = "white";
                    $txt = "Mostrar";
                    $txtcolor = "black";
                    $btncolor = "success";

                  }
                  echo "
                      <tr style='background-color: $color;'>
                        <td style='color: ".$txtcolor.";'>".$respuestas[$i]['Respuesta']."</td>
                        <td style='text-align: right; color: ".$txtcolor.";' id='Puntos'>".$respuestas[$i]['Puntos']."</td>
                        <td style='text-align: right;'>
                          <button class='btn btn-".$btncolor."' id='btnmos".$i."' name='btnmos' value='".$respuestas[$i]['Id_Respuesta']."'>
                            $txt
                          </button>
                        </td>
                      </tr>";
                }
              ?>
                  <?php 
            if($Nresp == $aciertos[0]['Total'])
              echo "<label class='btn btn-warning' style='width: 100%;'' id='Remover'>Remover pregunta</label>";
           


          ?>
          </table>  
        
          <div class="btn-group btn-group-justified" role="group" style='margin-top: -20px;' aria-label="...">
            <div class="btn-group" role="group" >
              <label type="button" id='str1' class="btn btn-danger"  onclick="
                this.className='btn btn-danger active'
                document.getElementById('str2').className='btn btn-danger';
                document.getElementById('str3').className='btn btn-danger';
              ">X</label>
            
            </div>
            <div class="btn-group" role="group">
              <label type="button" id='str2' class="btn btn-danger" onclick="
                this.className='btn btn-danger active'
                document.getElementById('str1').className='btn btn-danger';
                document.getElementById('str3').className='btn btn-danger';
              ">XX</label>
            
            </div>
            <div class="btn-group" role="group">
              <label type="button" id='str3' class="btn btn-danger" onclick="
                this.className='btn btn-danger active'
                document.getElementById('str1').className='btn btn-danger';
                document.getElementById('str2').className='btn btn-danger';
              ">XXX</label>
            
            </div>
          </div>
          <?php 
            }
          ?>
          <!-- <label class='btn btn-danger' id='strikebtn' style='width: 100%; margin-top: -20px;'>Strike++!</label> -->
          <script src='js/ajax.js'></script>
          
       <script type="text/javascript">
$(document).ready(function () {

$('#str1').on('click', function(){

        var dataString = 'z=Strike&value=1';

        $.ajax({
            type: "POST",
            url: "php/functions.php",
            data: dataString,
            success: function(data) {

            }
        });
    });  
    $('#str2').on('click', function(){

        var dataString = 'z=Strike&value=2';

        $.ajax({
            type: "POST",
            url: "php/functions.php",
            data: dataString,
            success: function(data) {

            }
        });
    });  
    $('#str3').on('click', function(){

        var dataString = 'z=Strike&value=3';

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
</body>