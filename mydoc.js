$(document).ready( 
    function(){ 
      $('#auto1').load('php/load.php?load=1');
      refresh1();
    });

    function refresh1(){
    setTimeout(
        function(){
          $('#auto1').load('php/load.php?load=1');
          refresh1();
        }, 1000);
    }

  $(document).ready( 
    function(){ 
      $('#auto2').load('php/load.php?load=2');
      refresh2();
    });

function refresh2(){
setTimeout(
    function(){
      $('#auto2').load('php/load.php?load=2');
      refresh2();
    }, 1000);
}

  $(document).ready( 
    function(){ 
      $('#auto3').load('php/load.php?load=3');
      refresh3();
    });

function refresh3(){
setTimeout(
    function(){
      $('#auto3').load('php/load.php?load=3');
      refresh3();
    }, 10000);
}

  $(document).ready( 
    function(){ 
      $('#auto4').load('php/load.php?load=4');
      refresh4();
    });

function refresh4(){
setTimeout(
    function(){
      $('#auto4').load('php/load.php?load=4');
      refresh4();
    }, 10000);
}

  $(document).ready( 
    function(){ 
      $('#auto5').load('php/load.php?load=5');
      refresh5();
    });

//PUNTOS TOTALES DE LA PARTIDA
function refresh5(){
setTimeout(
    function(){
      $('#auto5').load('php/load.php?load=5');
      refresh5();
    }, 3500);
}
  $(document).ready( 
    function(){ 
      $('#auto6').load('php/load.php?load=6');
      refresh6();
    });

//TALBERO
function refresh6(){
setTimeout(
    function(){
      $('#auto6').load('php/load.php?load=6');
      refresh6();
    }, 3500);
}

  $(document).ready( 
    function(){ 
      $('#auto7').load('php/load.php?load=7');
      refresh7();
    });

function refresh7(){
setTimeout(
    function(){
      $('#auto7').load('php/load.php?load=7');
      refresh7();
    }, 1000);
}
