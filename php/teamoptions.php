  <?php
  require("LDS.php");
  $equipos = getData("SELECT Nombre FROM equipo");
  ?>
  <body>
        <div><center>
          <input type="radio" id='op1' name="op1" value='1' checked style='visibility: hidden; position: absolute;'>
          <input type="radio" id='op2' name="op1" value='2'         style='visibility: hidden; position: absolute;'>

          <label id='team1' class='btn btn-primary btn-lg' style='width: 48%;'
          onclick="
            document.getElementById('op1').checked = true;
            document.getElementById('op2').checked = false;
            this.className='btn btn-primary btn-lg';
            document.getElementById('team2').className='btn btn-default btn-lg';
          " 
          >
          
          <?php echo strtoupper($equipos[0]['Nombre']); ?>
          
          </label>
          <label id='team2' class='btn btn-default btn-lg' style='width: 48%;'
            onclick="
              document.getElementById('op2').checked = true;
              document.getElementById('op1').checked = false;
              this.className='btn btn-primary btn-lg';
              document.getElementById('team1').className='btn btn-default btn-lg';
            " ><?php echo strtoupper($equipos[1]['Nombre']); ?></label>
        </center></div>
</body>