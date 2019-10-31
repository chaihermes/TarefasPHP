<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // exercício 1.a.g
        $numint = "33, 34, 35";
        echo $numint;
        var_dump($numint);?>
        <hr>
        
    <?php
    //exercício 1.b
        $numfloat = 3.59;
        echo $numfloat;
        var_dump($numfloat);?>
        <hr>

    <?php    
    // exercício 1.c
        $char = "c";
        echo $char;
        var_dump($char);?>
        <hr>

    <?php
    // exercício 1.d
        $charSimple = 'c';
        echo $charSimple;
        var_dump($charSimple);?>
        <hr>

    <?php
    //exercício 1.e.h
        $charString = 'meu nome é Chaiana 3.45';
        echo $charString;
        var_dump($charString);?>
        <hr>

    <?php
    //exercício 1.f    
        $charStringDouble = "meu nome é Chaiana";
        echo $charStringDouble;
        var_dump($charStringDouble);
    ?>
    <hr>

    <?php 
    //exercício 2 a.b.c
        $um = "Três";
        $dois = "pratos";
        $tres = "de";
        $quatro = "trigo";
        $cinco = "para";
        $seis = "três";
        $sete = "tigres";
        $oito = "tristes";
        echo $um." ".$dois." ".$tres." ".$quatro." ".$cinco." ".$seis." ".$sete." ".$oito; ?>
        <hr>
    
    <?php
    //exercício 2.d
        $nove = "Quatro";
        $dez = "brancos";
        echo $nove." ".$sete." ".$dez;
    ?>
    <hr>

    <?php
    //exercício 3
        $variable01 = true;
        $variable02 = false;
        $variable03 = 0;
        $variable04 = 1;
        $variable05 = 6;
        $variable06 = '';
        $variable07 = "3";
        $variable08 = "true";
        $variable09 = 'false';
        $variable10 = null;

        function tipoDado($varN) {
            if($varN == true) {
                echo 'o valor '.$varN.' é verdadeiro.';
            } else {
                echo 'o valor '.$varN.' é falso.';
            }
        }

        tipoDado($variable10); 
    ?>
    <hr>

    <?php 
    //exercício 4
        $animais = ["cachorro", "gato", "tartaruga", "pássaro", "leão"];
        var_dump($animais);?>
        <hr>

    <?php    
    //exercício 4.a    
        array_push($animais, "macaco", "cobra");
        var_dump($animais);?>
    <hr>    

        <?php
    //exercício 4.b   
        echo "Eu gosto de animais: ".$animais[0].", ".$animais[1].", ".$animais[2].", ".$animais[3].", ".$animais[4].", ".$animais[5].", ".$animais[6];?>
        <hr>

    <?php
    //exercício 4.c 
        array_shift($animais);
        array_unshift($animais, "gorila");
        var_dump($animais);?>
        <hr>
    <?php
    //exercício 4.d    
        $animais[100] = "tigre";
        var_dump($animais);?>
        <hr>

    <?php    
    //exercício 4.e
        $animais[16] = "girafa";
        var_dump($animais);  
    ?> 
<hr>

<?php 
//exercício 5
    $arrayCarros = ["Marca" => "Ford", "Modelo" => "Fusion", "Cor" => "Preto", "Ano" => "2019", "Placa" => "ABC1D23"];
    var_dump($arrayCarros);?>
    <hr>
    
    <?php
    //exercício 5.1
    array_unshift($arrayCarros, ["Dono" => "Chaiana"]);
    var_dump($arrayCarros);?>
    <hr>

    <?php
    //exercício 5.2
    $arrayCarros[14] = ["Seguradora" => "Mapfre Seguros"];
    var_dump($arrayCarros);
?>
<hr>


<?php 
//exercício 6
    $inteiro = 10;
    $decimal = 5.72;
    //6.a
    echo $inteiro + $decimal."<br>" ;
    //6.b
    echo $inteiro - $decimal."<br>" ;
    //6.c
    echo $inteiro / $decimal."<br>" ;
    //6.d
    echo $inteiro * $decimal."<br>" ;
    //6.e
    $divisao = $inteiro / $decimal;
    echo $divisao."<br>";
    //6.f
    $inteiro += 1;
    echo $inteiro."<br>";
    $decimal += 1;
    echo $decimal."<br>";
    //6.g
    $inteiro +=5;
    echo $inteiro."<br>";
    $decimal -= 0.6;
    echo $decimal."<br>";
    //6.h
    $resultado = (($inteiro * 2) + $decimal) / ($inteiro / 2);
    echo $resultado."<br>";
?>
<hr>

<?php  
//exercício 7
    $var1 = "Olá ";
    $var2 = "mundo!";
    //7.a
    $saudacao = $var1.$var2;
    echo $saudacao."<br>";
    //7.b
    $top = $saudacao." PHP é o máximo!";
    echo $top;
?>

</body>
</html>