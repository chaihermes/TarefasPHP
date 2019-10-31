
<?php 
//exercício 1
    for ($i = 0; $i <= 100; $i++){
        echo $i."<br>";
    }
?> 
<hr>

 
<?php 
//exercício 2
    for ($i = 0; $i <= mt_rand(0, 100); $i++){
        echo $i."<br>";
    }
?>
<hr>


<?php 
//exercício 3
    for($i = 0; $i <=10; $i++){
        echo $i * 2 ."<br>";
    }
?>
<hr>

<?php 
//exercício 4
    $quantidade = 0;
    $moeda = mt_rand(0,1);
    $tentativa = 1;

    while($quantidade < 5){
        $moeda = mt_rand(0,1);
        $quantidade = $quantidade + $moeda;
        $tentativa++;
        }
        if($quantidade =5){
            echo $tentativa;
        }
?>  
<hr>

<?php 
//exercício 5
    $quantidade = 0;
    $tentativa = 1;

    do {
        $moeda = mt_rand(0,1);
        $quantidade = $quantidade + $moeda;
        $tentativa++;
    } while ($quantidade < 5);
        echo $tentativa;
?>
<hr>


<?php 
//exercício 6.a
    $nomes =["Chaiana", "Pavlos", "Manu", "Marilene", "Hilário"];
    for($i = 0; $i < count($nomes); $i++){
        echo "O nome é $nomes[$i] <br />";
    }
?>
    <hr>
<?php
//exercício 6.b
    $nomes =["Chaiana", "Pavlos", "Manu", "Marilene", "Hilário"];
    foreach($nomes as $nome => $valor){
        echo "$nome : $valor";
    }
?>
<hr>

<?php
//exercício 6.c
    $nomes =["Chaiana", "Pavlos", "Manu", "Marilene", "Hilário"];
    $i = 0;
    while($i < count($nomes)){      
        echo $nomes[$i]."<br>";
        $i++;
    }
?>
<hr>

<?php
//exercício 6.d
    $nomes =["Chaiana", "Pavlos", "Manu", "Marilene", "Hilário"];
    $i = 0;
    do{                                  
        echo $nomes[$i]."<br>";
        $i++;
    } while ($i < count($nomes));
?>
<hr>

 
<?php 
//exercício 7
    $num = [];
    for($i = 0; $i < 10; $i++){
        $num[] = mt_rand(0, 10);
    }

    //letra A
    for($i = 0; $i < count($num); $i++){
        if($num[$i] == 5){
            echo "Encontramos o número 5<br>";
        } else {
            echo "Não encontramos o número 5<br>";
        }
    }
?>
<hr>

<?php
    //letra B
    $i = 0;
    while($i < 10){
        if($num[$i] == 5){
            echo "Encontramos o número 5 <br>";
            break;
        } else {
            echo "Não encontramos o número 5 <br>";
        }
        $i++;
    }
?>
<hr>

<?php
    //letra C
    $i = 0;
    do{
        if($num[$i] == 5){
            echo "Encontramos o número 5 <br>";
                break;
        } else {
            echo "Não encontramos o número 5 <br>";
        }
        $i++;
    } while ($i < 10);
?> 
<hr>

<?php
//exercício 8
foreach(range('a', 'n') as $letter => $valor){
        echo "Na posição ".$letter." está a letra ".$valor."<br>";
    }
?> 
<hr>


<?php 
//exercício 9
    $mascote = ["animal" => "cachorro", "idade" => "7", "altura" => "0,3", "nome" => "Pipo"];
    foreach($mascote as $lista => $valor){
        echo "$lista : $valor <br>";
    }
?>
<hr>


<?php 
//exercício 11
    $ceu = ["Itália" => "Roma", "Luxemburgo" => "Luxemburgo", "Bélgica" => "Bruxelas", "Dinamarca" => "Copenhagen", "Finlândia" => "Helsinki", "França" => "Paris", "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" => "Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã", "Portugal"=>"Lisboa", "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn", "Hungria"=>"Budapeste","Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena", "Polônia"=>"Varsóvia"];
    foreach($ceu as $key => $value){
        echo "A capital da $key é $value <br>";
    }
?>
<hr>


<?php 
//exercício 12
$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
    "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
    "França" => ["Paris", "Nantes", "Lyon"],
    "Itália" => ["Roma", "Milão", "Veneza"],
    "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    ];
    foreach($ceu as $key => $value){
        echo "As cidades do(a) $key são: <br>"; ?>
            <ul> 
                <?php foreach($value as $cidade){
                    echo "<li> $cidade<br> </li>"; }?> 
            </ul>
    <?php } ?> 
<hr>


<?php
//exercício 13 
$ceu = [
    "Argentina" => ["cidades" => ["Buenos Aires", "Córdoba", "Santa Fé"], "naAmerica" => true],
    "Brasil" => ["cidades" => ["Brasília", "Rio de Janeiro", "São Paulo"], "naAmerica" => true],
    "Colômbia" => ["cidades" => ["Cartagena", "Bogotá", "Barranquilla"], "naAmerica" => true],
    "França" => ["cidades" => ["Paris", "Nantes", "Lyon"], "naAmerica" => false],
    "Itália" => ["cidades" => ["Roma", "Milão", "Veneza"], "naAmerica" => false],
    "Alemanha" => ["cidades" => ["Munique", "Berlim", "Frankfurt"], "naAmerica" => false] 
    ];
    foreach($ceu as $pais => $cidades){
            if($cidades["naAmerica"]){ 
                echo "As cidades do(a) $pais são: <br>";
                foreach($cidades["cidades"] as $cidade){         
                echo "<ul>
                    <li> $cidade <br></li>
                    </ul>";}
            } else {
                echo "Esse país não está na América<br>";
                } 
    } ?> 
