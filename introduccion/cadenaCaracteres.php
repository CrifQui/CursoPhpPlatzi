<?php 

//Diferencia comillas
$stringVar="World";
$diference='Hello $stringVar';
$diferencia="Hello $stringVar";
echo '<br>';
var_dump($diference);
echo '<br>';
var_dump($diferencia);
echo '<br>';

//Tipado dinamico
$dinamic=5;
$dinamic='Cinco';
var_dump($dinamic);
echo '<br>';
//Tipado Debil (Cast)
$debil= 5;
$new='Hello'. $debil;
echo $new;
 ?>