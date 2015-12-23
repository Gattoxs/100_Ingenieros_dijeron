 <?php 

echo "
  $(document).ready( 
    function(){ 
      $('#auto1').load('load.php?load=1');
      refresh1();
    });

function refresh1(){
setTimeout(
    function(){
      $('#auto1').load('load.php?load=1');
      refresh1();
    }, 1000);
}

  $(document).ready( 
    function(){ 
      $('#auto2').load('load.php?load=2');
      refresh1();
    });

function refresh2(){
setTimeout(
    function(){
      $('#auto2').load('load.php?load=2');
      refresh2();
    }, 1000);
}

  $(document).ready( 
    function(){ 
      $('#auto3').load('load.php?load=3');
      refresh3();
    });

function refresh3(){
setTimeout(
    function(){
      $('#auto3').load('load.php?load=3');
      refresh3();
    }, 1000);
}

  $(document).ready( 
    function(){ 
      $('#auto1').load('load.php?load=4');
      refresh1();
    });

function refresh4(){
setTimeout(
    function(){
      $('#auto4').load('load.php?load=4');
      refresh4();
    }, 1000);
}

";

?>