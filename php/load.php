<?php 
	require('conexion.php');
    require('LDS.php');
	$actividad = $_GET['load'];

#    if($rows[0]['Sonido'] == 0){
 #               echo "<embed src='sound/next.mp3' autostart='true' loop=false width=0 height=0 >";
  #             $resu = $db->query($sql);
    #        }

    switch ($_GET['load']) {
        case 1: //Puntos equipo 1
            $team1 = getData("SELECT Puntos FROM equipo WHERE Id_Equipo = 1");
            $String = $team1[0]['Puntos']."";
            for($a=0; $a < strlen($String);$a++)
                    echo "<img src='img/abc/".$String[$a].".png'>";
            break;

        case 2: //Puntos equipo 2
            $team2 = getData("SELECT Puntos FROM equipo WHERE Id_Equipo = 2");
            $String = $team2[0]['Puntos']."";
            for($a=0; $a < strlen($String);$a++)
                    echo "<img src='img/abc/".$String[$a].".png'>";
            break;

        case 3: //Nombre equipo 1
            $teamN1 = getData("SELECT Nombre FROM equipo WHERE Id_Equipo = 1");
            $String = strtoupper($teamN1[0]['Nombre']."");
            for($a=0; $a < strlen($String);$a++){
                    if($String[$a] != " ")
                        echo "<img src='img/abc/".$String[$a].".png'>";
                    else
                        echo "<img src='img/abc/space.png'>";
            }
            
            break;

        case 4: //Nombre equipo 2
            $teamN2 = getData("SELECT Nombre FROM equipo WHERE Id_Equipo = 2");
            $String = strtoupper($teamN2[0]['Nombre']."");
            for($a=0; $a < strlen($String);$a++){
                    if($String[$a] != " ")
                        echo "<img src='img/abc/".$String[$a].".png'>";
                    else
                        echo "<img src='img/abc/space.png'>";
            }
            break;

        case 5: //Puntos del juego
            $preg = getData("SELECT Pregunta, Puntosx from juego");
            $x = $preg[0]['Puntosx'];
            $preg = $preg[0]['Pregunta'];
            $rows = getData("SELECT Sum(respuestas.Puntos) AS P, preguntas.Activo FROM respuestas 
                INNER JOIN preguntas
                ON respuestas.Id_Pregunta = preguntas.Id_Pregunta
                WHERE respuestas.Oculto = 1 AND preguntas.Id_Pregunta = ".$preg);
            $puntostotales = $rows[0]['P'] * $x;
            updateTable("UPDATE juego SET Puntos = '".$puntostotales."' WHERE  Id_juego = 0");
            echo "<br><center>";
            $numeros = $puntostotales."";
            for($a=0; $a < strlen($numeros);$a++)
                echo "<img src='img/abc/".$numeros[$a].".png'>";
        
            echo "</center>";

            break;


        case 6: //Tabla de respuestas
            
            $pregunta = getData("SELECT Pregunta FROM juego;");
            if($pregunta[0]['Pregunta'] > 0){
                MusicOFF();
                $rows = getData("SELECT * FROM respuestas WHERE Id_Pregunta = ".$pregunta[0]['Pregunta']." ORDER BY Puntos DESC");
                

                            echo "
                                <table class='table' style='margin-top: -20px;'>
                                ";
                        for($i=0;$i<rowCount($rows);$i++){
                            echo"
                                    <tr>
                                        <td><font color=white style='font-size: 24;'>".($i+1).".- </font></td>
                                        <td style='text-align:left;'>
                                        <font  color=yellow style='font-size: 24;'>
                                            ";
                                        if($rows[$i]['Oculto'] == 1)
                                            echo $rows[$i]['Respuesta'];

                            echo "
                                        </font></td>
                                        <td style='text-align:right;'>
                                        <font color=white style='font-size: 24;'>
                                            ";
                                        if($rows[$i]['Oculto'] == 1)    
                                            echo $rows[$i]['Puntos'];
                                        else
                                            echo "--";
                            echo "
                                        </font></td>
                                    </tr>";
                        }
                            echo "</table>";

                             $sonido = getData("SELECT Correctaux FROM juego");
                             if($sonido[0]['Correctaux'] != 0){
                              echo "<embed src='Sound/correct.mp3' autostart='true' loop=false width=0 height=0 >";
                            }
                            updateTable("UPDATE juego SET Correctaux = 0");
                }else{
                    switch ($pregunta[0]['Pregunta']) {
                        case 0: //LOGO
                            MusicOFF();
                             echo "<center><img src='img/logoev.png' style='width: 70%; magin-left: 15%;'></center>";
                            break;
                        case -1: //PUNTOS NORMALES
                             echo "<center><img src='img/puntos1.gif' style='width: 70%; magin-left: 15%;'></center>";
                             updateTable("UPDATE juego SET Puntosx = 1");
                            break;
                        case -2: //PUNTOS AL DOBLE
                            echo "<center><img src='img/puntos2.gif' style='width: 100%; magin-left: 0%; ' ></center>";
                            updateTable("UPDATE juego SET Puntosx = 2");
                            break;
                        case -3: //PUNTOS AL TRIPLE
                            echo "<center><img src='img/puntos3.gif' style='width: 100%; magin-left: 0%; ' ></center>";
                            updateTable("UPDATE juego SET Puntosx = 3");
                            break;
                        case -4: //Hipnosapo
                            echo "<center><img src='img/hipnosapo.gif' style='width: 100%; magin-left: 0%; ' ></center>";
                            break;
                        case -5: //seleccion
                            echo "<center><img src='img/Seleccion.gif' style='width: 100%; magin-left: 0%; ' ></center>";
                            
                            $music = getData("SELECT music FROM juego");
                            if(!$music[0]['music'])
                            echo "  <script> 
                                      $(document).ready( 
                                        function(){ 
                                          $('#auto8').load('php/music.php?z=Seleccion');
                                        });
                                     </script>";
                            updateTable("UPDATE juego SET music = 1");

                            break;
                            //Musica
                            case -6: //Sonic Scape
                                MusicON("Sonic.gif","Escape");
                                break;
                            case -7: //Mario
                                MusicON("Mario.gif","Mario");
                                break;
                            case -8: //Red
                                MusicON("Red1.png", "Red");
                                break;
                            case -9: //Angeles Fuimos
                                MusicON("Goku1.gif", "Goku");
                                break;
                            case -10: //Death note
                                MusicON("light.gif", "Light");
                                break;
                            case -11: //Shingeky
                                MusicON("shinge.gif","Shinge");
                                break;
                            case -12: //Zelda
                                MusicON("link1.gif","Zelda");
                                break;
                            case -13: //League of legends
                                MusicON("lol1.gif","LoL");
                                break;
                            case -14:
                                MusicON("iron.gif","Iron");
                                break;
                            case -15:
                                MusicON("SW.gif","SW");
                                break;
                            case -16:
                                MusicON("HT.jpg","HT");
                                break;
                            case -17:
                                MusicON("megaman.gif","Mega");
                                break;
                            case -18:
                                MusicON("DP.gif","DP");
                                break;
                            case -19:
                                MusicON("UM.gif","UM");
                                break;
                            case -20: //Angeles Fuimos
                            $music = getData("SELECT music FROM juego");

                            echo "<center><img src='img/logoev.png' style='width: 100%; magin-left: 0%; ' ></center>";
                            
                            if(!$music[0]['music'])
                                echo "  <script> 
                                      $(document).ready( 
                                        function(){ 
                                          $('#auto8').load('php/music.php?z=Challenger');
                                        });
                                     </script>";
                            updateTable("UPDATE juego SET music = 1");
                            break;
                            case -105: //Tirado
                            $music = getData("SELECT music FROM juego");

                            echo "<center><img src='img/logoev.png' style='width: 100%; magin-left: 0%; ' ></center>";
                            
                            if(!$music[0]['music'])
                                echo "  <script> 
                                      $(document).ready( 
                                        function(){ 
                                          $('#auto8').load('php/music.php?z=Tirado');
                                        });
                                     </script>";
                            updateTable("UPDATE juego SET music = 1");
                            break;
                            case -21:
                                MusicON("digimon.gif","Digimon");
                                break;
                            case -22:
                                MusicON("pokemon.gif","Pokemon");
                                break;
                            case -23:
                                MusicON("one.gif","One");
                                break;
                            case -24:
                                MusicON("ranma.gif","Ranma");
                                break;
                            case -25:
                                MusicON("inu.gif","Inu");
                                break;
                            case -26:
                                MusicON("sailor.gif","Sailor");
                                break;
                            case -27:
                                MusicON("caba.gif","Caba");
                                break;

                            case -99: //pregunta finalizada
                                MusicON("INC.gif","INC");
                                break;
                        default:
                             MusicOFF();
                             echo "<center><img src='img/logoev.png' style='width: 70%; magin-left: 15%;'></center>";
                            break;
                    }

                }
            break;
        
        case 7: //Strikes
                $strikes = getData("SELECT Strikeaux FROM juego");
                if($strikes[0]['Strikeaux'] != 0){
                    echo "<embed src='Sound/strike.mp3' autostart='true' loop=false width=0 height=0 >";
                }
                for($i = 0; $i < $strikes[0]['Strikeaux']; $i++)
                    echo "<img src='img/nope.png' style='width: 25%; margin-top: 150px;'>";
                
                
                updateTable("UPDATE juego SET Strikeaux = 0");


            break;
        
        default:
            # code...
            break;
    }
    	
?>

<?php 

function MusicON($Image, $xMusic){
    $music = getData("SELECT music FROM juego");

    echo "<center><img src='img/$Image' style='width: 100%; magin-left: 0%; ' ></center>";
    
    if(!$music[0]['music'])
        echo "  <script> 
              $(document).ready( 
                function(){ 
                  $('#auto8').load('php/music.php?z=Music&x=".$xMusic."');
                });
             </script>";
    updateTable("UPDATE juego SET music = 1");
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