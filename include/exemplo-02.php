<?php
//include aceita uma pasta de include_path e faz rodar de qualquer forma
//INCLUDE "exemplo-01.php"; require é a melhor opção sendo solo
//REQUIRE tem que estar certo o endereço e funcionar perfeitamente
require "<inc/exemplo-01.php";
//REQUIRE_ONCE não permite ter conflitos com a function... não duplica 
//o chamado
require_once "<inc/exemplo-01.php";
$resultado = somar(10, 20);

echo $resultado;

?>