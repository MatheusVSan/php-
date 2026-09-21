<?php


$pessoas = array(
    
    array(
        'nome'=>'João',
        'idade'=>20
    ),
    array(
        'nome'=>'Maria',
        'idade'=>25
    )
);
 foreach ($pessoas as $pessoa) {
     
     foreach ($pessoa as $key => $value) {
         
         echo "<strong>" . $key . "</strong>" . $value . "<br>";
     }
     echo "<hr>";
 }
?>