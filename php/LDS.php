
<?php 

date_default_timezone_set("America/Tijuana");
  #Convierte el formato fecha a/m/d a un formato que desees mostrar
    # $date: En este parametro pondremos la fecha que deseemos modificar
    # $mostrar: Se mostrara el contenido como nosotros deseemos que se muestre a:d:m o d:m:a
      # O simplemente puede mostrar solo el año o dia o mes.. para escribirlo que la funcion lo reconosca se tendra
      # que escribir a (para año), m(para mes), d(para dia) y ':'(dos puntos) para separar 
  function cnvDate($date, $mostrar, $idioma){
    $anio = substr($date, -10, 4);
    $mes = substr($date, -5, 2);
    $dia = substr($date, -2);
    if($idioma == "ES"){
        switch ($mes) {
          case "01": $mes = "Enero"; break;
          case "02": $mes = "Febrero"; break;
          case "03": $mes = "Marzo"; break;
          case "04": $mes = "Abril"; break;
          case "05": $mes = "Mayo"; break;
          case "06": $mes = "Junio"; break;
          case "07": $mes = "Julio"; break;
          case "08": $mes = "Agosto"; break;
          case "09": $mes = "Septiembre"; break;
          case "10": $mes = "Octubre"; break;
          case "11": $mes = "Noviembre"; break;
          case "12": $mes = "Diciembre"; break;

          default: $mes = "???"; break;
        }

    }
    if($idioma == "EN"){
        switch ($mes) {
          case "01": $mes = "January"; break;
          case "02": $mes = "February"; break;
          case "03": $mes = "March"; break;
          case "04": $mes = "April"; break;
          case "05": $mes = "May"; break;
          case "06": $mes = "June"; break;
          case "07": $mes = "July"; break;
          case "08": $mes = "August"; break;
          case "09": $mes = "September"; break;
          case "10": $mes = "Octuber"; break;
          case "11": $mes = "November"; break;
          case "12": $mes = "December"; break;

          default: $mes = "???"; break;
        }
    }

        switch ($mostrar) {
          case "d":     return $dia; 
          case "m":     return $mes;
          case "a":     return $anio;
          case "d:m":   return $dia." ".$mes;
          case "d:m:a": return $dia." ".$mes." ".$anio;
          case "m:a":   return $mes." ".$anio;
          case "a:m:d": return $anio." ".$mes." ".$dia;
          case "a:d:m": return $anio." ".$dia." ".$mes;
          
          default: case "d:m:a": return $dia." ".$mes." ".$anio; break;
        }
  }
  #Obtiene la hora actual
  function getCurrentTime(){
    return date("H:i:s");
  }
 
  #Obtiene la fecha actual
  function getCurrentDate(){
    return date("Y-m-d");
  }

  # Convierte la hora a como nosotros le indiquemos en la variable $show, 
    # ejemplo: getCurrentTime_Format("h:m", false); No mostrara 05:28 p. m.
    # El segundo parametro ($format) es para decir si es de 12 o 24 horas,
    # True = 24, False = 12
  function getCurrentTime_Format($show, $format){
    $time = getCurrentTime();
    
    $hours =   substr($time, -8, 2);
    $minutes = substr($time, -5, 2);
    $seconds = substr($time, -2);
    $pref = "";

    if(!$format){
      if($hours >= 13){
        $hours = $hours - 12;
        $pref = " p. m.";
      }else{
        $pref = " a. m.";
      }
    }

    switch ($show) {
      case 'h': return $hours.$pref; break;
      case 'm': return $minutes.$pref; break;
      case 's': return $seconds.$pref; break;
      case 'h:m': return $hours.":".$minutes.$pref; break;
      case 'm:h': return $minutes.":".$hours.$pref; break;
      case 'm:s': return $minutes.":".$seconds.$pref; break;
      case 'h:m:s': return $hours.":".$minutes.":".$seconds.$pref; break;
      case 'm:s:h': return $minutes.":".$seconds.":".$hours.$pref; break;
      case 's:m:h': return $seconds.":".$minutes.":".$hours.$pref; break;
      
      default:
        return $hours.":".$minutes.":".$seconds;
        break;
    }
  }

  function cnvTime_Format($time, $show, $format){
    $hours =   substr($time, -8, 2);
    $minutes = substr($time, -5, 2);
    $seconds = substr($time, -2);
    $pref = "";

    if(!$format){
      if($hours >= 13){
        $hours = $hours - 12;
        $pref = " p. m.";
      }else{
        $pref = " a. m.";
      }
    }

    switch ($show) {
      case "h": return $hours.$pref; break;
      case "m": return $minutes.$pref; break;
      case "s": return $seconds.$pref; break;
      case "h:m": return $hours.":".$minutes.$pref; break;
      case "m:h": return $minutes.":".$hours.$pref; break;
      case "m:s": return $minutes.":".$seconds.$pref; break;
      case "h:m:s": return $hours.":".$minutes.":".$seconds.$pref; break;
      case "m:s:h": return $minutes.":".$seconds.":".$hours.$pref; break;
      case "s:m:h": return $seconds.":".$minutes.":".$hours.$pref; break;
      
      default:
        return $hours.":".$minutes.":".$seconds.$pref;
        break;
    }
  }
####### MENEJO DE BASE DE DATOS ########

function getData($sql){
    include_once("databases.php");  
  $con = new Conexion();
  $db = $con->getConexion();
  if(is_null($db))
    echo "error";
  $result = $db->query($sql);
   if(!$result)
    echo "error";
   else 
    return $rows = $result->fetchAll(PDO::FETCH_ASSOC);
}

function rowCount($sql){

    $cont = 0;
    for($i=0;;$i++){
       
      if(isset($sql[$i]))
        $cont++;
      else
        return $cont;
    }
    return 0;
}

function updateTable($sql){
  include_once("databases.php");  
            $con = new Conexion();
            $db = $con->getConexion();
            if(is_null($db))
              echo "error";
  $result = $db->query($sql);
}

function insertData($sql){
 include_once("databases.php");  
            $con = new Conexion();
            $db = $con->getConexion();
            if(is_null($db))
              echo "error";
  $result = $db->query($sql); 
}

function SQL($sql){
 include_once("databases.php");  
            $con = new Conexion();
            $db = $con->getConexion();
            if(is_null($db))
              echo "error";
  $result = $db->query($sql); 
}

?>


