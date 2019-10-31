<?php 
//exercício 1
var_dump($_GET);
?>
<hr>

<!-- exercício 2 -->
<!DOCTYPE HTML>
<html>
<body>
    <form ​action​=​"imprimir.php" ​method​=​"get">
        Nome​: <​input type​=​"text"​name​=​"nome"​><​br>
        E​-​mail​: <​input type​=​"text"​name​=​"email"​><​br>
        <input ​type​=​"submit">
    </form>
</body>
</html>
<hr>

<?php 
//exercício 3
var_dump($_POST);
?>
<hr>

<!-- exercício 4 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="imprimir.php" method="POST">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit"><br>
        <label>Como você ficou sabendo desse site?</label><br>
        <label><input type="checkbox" name="check" value="Google"> Google</label><br>
        <label><input type="checkbox" name="check" value="amigoa"> Amigos</label><br>
        <label><input type="checkbox" name="check" value="facebook"> Facebook</label><br>
        <label><input type="checkbox" name="check" value="linkedin"> LinkedIn</label><br>
        <label> Como você se identifica?</label><br>
        <label><input type="radio" name="genero" value="masculino"> Masculino</label><br>
        <label><input type="radio" name="genero" value="feminino"> Feminino</label><br>
        <label><input type="radio" name="genero" value="outros"> Prefiro não me identificar</label><br>
        <label> Dormiu bem ontem? Dê uma nota:</label><br>
        <select name="select"><br>
            <option value="um"> 1</option>
            <option value="dois"> 2</option><br>
            <option value="tres"> 3</option><br>
            <option value="quatro"> 4</option><br>
            <option value="cinco"> 5</option><br>
            <option value="seis"> 6</option><br>
            <option value="sete"> 7</option><br>
            <option value="oito"> 8</option><br>
            <option value="nove"> 9</option><br>
            <option value="dez"> 10</option><br>
            <br><label><input type="checkbox" name="check" value="termos"> Aceito os Termos e Condições</label><br>
    </form>
</body>

</html>

<?php 
    foreach($_POST as $key => $value){
        echo "$key : $value";
    }
?>
<hr>


<!-- 5 -->
<?php

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}

?> 
<hr>

<?php 
//exercício 6.a
    var_dump($_SERVER);
?>
<hr>

 
<?php 
//exercício 6.b
    var_dump($_FILES);
?>
<hr>

<!-- contém informações de $_GET $_POST e $_COOKIE -->
<?php 
//exercício 6.c
    var_dump($_REQUEST);
?> 
<hr>


<?php
//exercício 6.d 
    var_dump($_SESSION);
?>
<hr>


<?php 
//exercício 6.e
    var_dump($_ENV);
?>
<hr>


<?php 
//exercício 6.f
    var_dump($_COOKIE);
?> 
<hr>


<?php 
//exercício 6.g
    var_dump($GLOBALS);
?> 