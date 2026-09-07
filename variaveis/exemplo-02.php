<?php
/*
$anoNascimento = 1990;

$nomeCompleto = "" ;*/

// Na linha a baixo temos umas variaveis com numero no nome
$nome1 = "joão";
//Aprendendo a concatenar...
$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

//Aprendendo a renomear variavel
echo $nome1; 

echo "<br/>";

unset($nome1);

if(isset($nome1)) {

echo $nome1;

}


?>