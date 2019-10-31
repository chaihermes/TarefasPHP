<?php 
//exercício 1
    $a = 10;
    $b = 25;
    if($a > $b) {
        echo "O maior número é $a";
    } else {
        echo "O maior número é $b";
    }
?> 
<hr>

<?php 
//exercício 2
    $random = mt_rand(1, 5);
        if ($random == 3 || $random ==5){
            echo $random;
        } else {
            echo "O número náo é 3 ou 5";
        }
?> 
<hr>

<?php 
//exercício 3
    $random = mt_rand(1, 5);
        if ($random == 3){
            echo $random;
        } else {
            echo "O número náo é 3";
        }
?> 
<hr>

<?php 
//exercício 4
    $maior = mt_rand(1, 100);
        if ($maior > 50){
            echo "O número é maior que 50";
        } else {
            echo "O número é menor que 50";
        }
?>
<hr>

<?php 
//exercício 5
    $aleatorio = mt_rand(1, 100);
        if($aleatorio > 50 && $aleatorio % 2){
            echo "O número cumpre a condição";
        } else {
            echo "O número NÃO cumpre a condição";
        }
?> 
<hr>

<?php 
//exercício 6
    $idade = [];
    $casado = [true, false];
    $sexo = ["Masculino", "Feminino", "Outro"];
        if ($idade > 18 && $casado == false){
            echo "Boas-vindas";
        } else {
            echo "Não é permitida a entrada";
        }
?> 
<hr>

<?php 
//exercício 6.a
    $idade = [];
    $casado = [true, false];
    $sexo = ["Masculino", "Feminino", "Outro"];
        if ($idade > 18 && $casado == false && $sexo == "Outro"){
            echo "Boas-vindas";
        } else {
            echo "Não é permitida a entrada";
        }
?> 
<hr>


<?php 
//exercício 7.a
    $quantidadeDeAlunos = 100;
        if($quantidadeDeAlunos){
            echo "true";
        } else {
            echo "false";
        }
?> 
<hr>

<?php 
//exercício 7.b
        if($quantidadeDeAlunos){
            echo "true";
        } else {
            echo "false";
        }
?> 
<hr>

<?php 
//exercício 7.c
    $quantidadeDeAlunos = 100;
        if($quantidadeDeAlunos){
            echo "true";
        } else {
            echo "false";
        }
?> 
<hr>

<?php 
//exercício 7.c
    $quantidadeDeAlunos = -1;
        if($quantidadeDeAlunos){
            echo "true";
        } else {
            echo "false";
        }
?> 
<hr>

<?php 
//exercício 7
    $quantidadeDeAlunos = 100;
        if($i == 1){
            echo "true";
        } else {
            echo "false";
        }
?> 
<hr> 

<?php 
//exercício 8
    $numero = 15;
    $result = $numero % 2 == 0 ? "O número é par" : "O número é ímpar";
    echo $result;
?> 
<hr>

<?php 
//exercício 9
    $i = mt_rand(1, 5);
    switch($i){
        default:
        echo "i igual a $i";
        break;
    }
?>
<hr>

<?php 
//exercício 10
    $i = mt_rand(1, 5);
    switch($i){
        case 1:
        echo "O número é igual a 1";
        break;
        case 2:
        echo "O número é igual a 2";
        break;
        default:
        echo "Não é igual a 1 ou 2";
        break;
    }
?>
<hr> 

<?php 
//exercício 11
    $x = mt_rand(1, 100);
    $y = mt_rand(1, 100);
        if($x > $y){
            echo $x;
        } elseif($y > $x){
            echo $y;
        } elseif ($x == $y){
            echo "São iguais";
        }
?>