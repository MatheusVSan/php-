<?php

$idadeMenor = 12;
$idadeAdolescente = 15;
$idadeAdulto = 25;
$idadeIdoso = 60;

if ($idade < 18) {
    echo "Você é uma criança";

} elseif ($idade < 60) {
    echo "Você é um adolecente";

} elseif ($idade < 80) {
    echo "Você é um adulto";

} else {
    echo "Você é um idoso";
}

?>