<?php

$nome = "joao rangel";
//totalmente maiuscula...
$nome = strtoupper($nome);

echo $nome;
//totalmente minuscula...
$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";
//apenas a primeira letra maiuscula...
echo ucfirst ($nome);

echo "<br>";
//apenas as primeiras letras apos espaço    
echo ucwords($nome);


?>