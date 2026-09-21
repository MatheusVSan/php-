<?php

function soma(int ...$valores): string {
    return array_sum($valores);
}

echo soma (2, 2);
echo "<br>";
echo soma (25, 25);
echo "<br>";
$somar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo soma(...$somar); 
?>  