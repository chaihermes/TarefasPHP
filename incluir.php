<?php 
//exercício 3
echo "Sou o arquivo incluir. <br>";
?>
<hr>



<?php 
//exercício 3.a
echo "Sou o arquivo incluir. <br>";

include "boletos.php";
?>
<hr>

<?php 
//exercício 3.b
echo "Sou o arquivo incluir. <br>";

require "boletos.php";
?>
<hr>

<?php 
//exercício 3.d
echo "Sou o arquivo incluir. <br>";

include "boletos.php";
include "boletos.php";
include "boletos.php";
?>
<hr>

<?php 
//exercício 3.e
echo "Sou o arquivo incluir. <br>";

include_once "boletos.php";
include_once "boletos.php";
include_once "boletos.php";
?>