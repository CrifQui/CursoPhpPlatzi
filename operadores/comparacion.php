<?php

$x=1;
$y='1';

//comparacion "es igual"

$result= $x == $y;
var_dump($result);
echo '<br>';

//Exactamente igual (evalua el valor y el tipo de dato)

$result2 = $x === $y;
var_dump($result2);
echo '<br>';

// diferente

$result3 = $x != $y;
var_dump($result3);
echo '<br>';

// diferente en valor o tipo 
$result4 = $x !== $y;
var_dump($result4);
echo '<br>';

// Mayor(1) o Menor(-1) o Igual(0)
$result5 = $x <=> $y;
var_dump($result5);
?>