<?php

$qualASuaIdade = 25;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 125;

if ($qualASuaIdade < $idadeCrianca) {

    echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) {

echo "adolecente";   

}else if ($qualASuaIdade < $idadeMelhor){


echo "Adulto";

}else {

echo "idoso";

}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>