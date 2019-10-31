<?php 
//exercicio 5.a
    function triangulo($base, $altura){
        return (($base * $altura)/ 2);
    }

    var_dump(triangulo(10, 15));
?>
<hr>

<?php 
//exercício 5.b
function retangulo($base, $altura){
    return($base * $altura);
}

var_dump(retangulo(5, 2));
?>
<hr>

<?php 
//exercício 5.c
function quadrado($base){
    return pow($base, 2);
}

var_dump(quadrado(3));
?>