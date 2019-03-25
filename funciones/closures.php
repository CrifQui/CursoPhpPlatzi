<?php  

//funcion anonima
$x=2;
$var = function ()use ($x){
	echo 'esta es una funcion anonima<br>';
	echo 'value '. $x . '<br>';
};

$var();

//funcion anonima como parametro

$numeros = [1 , 2 , 3 , 4 , 5];
$result = array_map(function($n) use($x) {
	return $n * $x;
}, $numeros);

var_dump($result);
?>