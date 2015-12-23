<?php
            include_once("databases.php");  
            $con = new Conexion();
            $db = $con->getConexion();
            if(is_null($db))
              echo "error";
?>