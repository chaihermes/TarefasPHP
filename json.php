<!-- letra f
<?php 
    $a = [];
    $a[] = ['a' => 1, 'b' => 2, 'c' => 'Eu <3 JSON'];
    echo json_encode($a);
    echo $a;
    //var_dump($a); //não consigo imprimir a $a com echo, não entendi por que.
    $b = json_decode($a, true);
    echo $b;
    echo "[$a][2]";
?>  -->



<?php 
if(file_exists('categorias.json')){
    echo "O arquivo existe";
} else {
    echo "O arquivo não existe";
}

$arquivo = file_get_contents('categorias.json');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>checkbox</title>
</head>
<body>
    <form action="" method="POST">
        <label><input type="checkbox" name="check" value="id : 1"> Esportes</label><br>
        <label><input type="checkbox" name="check" value="id : 2"> História</label><br>
        <label><input type="checkbox" name="check" value="id : 3"> Entretenimento</label><br>
        <label><input type="checkbox" name="check" value="id : 4"> Geografia</label><br>
        <label><input type="checkbox" name="check" value="id : 5"> Artes</label><br>
</body>
</html>