<?php

$diaDaSemana = 8; //date("w");

switch ($diaDaSemana) {

    case 0:
        echo "domingo";
    Break;

    case 1:
        echo "Segunda-feira";
    Break;
    
    case 2:
        echo "Terça-feira";
    Break;
    
    case 3:
        echo "Quarta-feira";
    Break;
    
    case 4:
        echo "Quinta-feira";
    Break;
    
    case 5:
        echo "Sexta-feira";
    Break;

      case 6:
        echo "Sabado";
    Break;  

    default:
        echo "Data invalida!";
    break;

      }
?>