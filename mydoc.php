<script type="text/javascript">
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
      $('#auto4').load('load.php?load=4');
      refresh4();
    });

function refresh4(){
setTimeout(
    function(){
      $('#auto4').load('load.php?load=4');
      refresh4();
    }, 1000);
}
  $(document).ready( 
    function(){ 
      $('#auto5').load('load.php?load=5');
      refresh5();
    });

function refresh5(){
setTimeout(
    function(){
      $('#auto5').load('load.php?load=5');
      refresh5();
    }, 1000);
}
  $(document).ready( 
    function(){ 
      $('#auto6').load('load.php?load=6');
      refresh6();
    });

function refresh6(){
setTimeout(
    function(){
      $('#auto6').load('load.php?load=6');
      refresh6();
    }, 1000);
}

  $(document).ready( 
    function(){ 
      $('#auto7').load('load.php?load=7');
      refresh7();
    });

function refresh7(){
setTimeout(
    function(){
      $('#auto7').load('load.php?load=7');
      refresh7();
    }, 1000);
}
</script>

