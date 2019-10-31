<!-- 1 -->
<!-- letra A -->
<!-- <?php

//function maior($num1, $num2, $num3){
    //if($num1 > $num2 && $num1 > $num3){
     //   return "$num1";
   // } elseif($num2 > $num1 && $num2 > $num3){
  //      return "$num2";
  //  } else {
  //      return "$num3";
//}
//}

//var_dump(maior(5, 6, 3));
?> 
<hr> -->

<!-- 1 -->
<!-- letra B -->
<!-- <?php 
//    function tabela($base, $limite){
//        for($i = $base; $i <= $limite; $i++){
//            echo $i."<br>";
//        }
//   }

//var_dump(tabela(4, 13));
?>
<hr> -->



<!-- letra C -->
<?php 
 $numeroMagico = 10;
 function maior($num1, $num2, $numeroMagico){
   if($num1 > $num2 && $num1 > $numeroMagico){
       return "$num1";
   } elseif($num2 > $num1 && $num2 > $numeroMagico){
       return "$num2";
   } else {
       return "$numeroMagico";
   }
}

var_dump(maior(5,3456, $numeroMagico));
?>
<hr>

<!-- //$funcoesExecutadas++; //não entendi como adicionar essa variável pra função funcionar.
//global $funcoesExecutadas; -->
<!-- letra D -->
<?php
    ​$numeroMagico = 10;
    function tabela($base, $numeroMagico){
            for($i = $base; $i <= $numeroMagico; $i++){
            echo $i."<br>";
        }
    }

var_dump(tabela(2, $numeroMagico));
?>