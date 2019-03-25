<?php 
//Arreglo
$arrayVar= ['blue','red','white'];
var_dump($arrayVar);
echo '<br>';

//php usa (mapas ordenados no arreglos) colleccion entre llaves y valores

$array=[
	2 => 'blue',
	1 => 'red',
	'llave3' => 'white'
];
var_dump($array);
echo '<br>';

//acceder a elementos

var_dump($array[2]);
echo '<br>';
var_dump($array['llave3']);
?>