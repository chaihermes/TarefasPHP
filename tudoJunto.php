<?php
//exercício 4
$funcoesExecutadas = 0;

include_once "funcoes.php";
?>
<hr>

<?php 
//exercício 6
$frase = "Adoro php! -Eu também adoro php!";
$encontre = "php";
$posicao = strpos($frase, $encontre);

    if($posicao === false){
        echo "A palavra '$encontre' não foi encontrada em '$frase'";
    } else {
        echo "A palavra '$encontre' foi encontrada em '$frase' e existe na posição '$posicao'";
    }
?>