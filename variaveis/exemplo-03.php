<?php

//tipos de variaveis... 
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
/////////////////////////////

//Tipos compostos de variaveis e arrays...

$frutas = array ("abacaxi", "laranja", "manga");

//echo $frutas[2];  

// Exemplo simples de objetos "NEW" orientação a objeto

$nascimento = new DateTime();

//var_dump($nascimento);

//Variaveis especiais

$arquivo = fopen ("exemplo-03.php","r");

var_dump($arquivo);

// variaveis NULO é igual a ausencia de valores não existes 
// variaveis Vazia foi iniciada mas apenas sem valores...

$nulo = NULL; 

?>  