<?php  

//funciones declaracion

function hello(){
	echo 'Hello';
	echo '<br>';
}

// declaracion
hello();


//funcion con parametro

function saludo($name){
	echo 'Hello ' . $name ;
	echo '<br>';
}

saludo('cristian');

//funcion con retorno

function sum($a, $b){
	return $a + $b;
}
$c = sum(1,2);
var_dump($c);
echo '<br>';

//scope vida de la funcion
$x=100;
function scope(){
	$x =8;
	return $x;
}
var_dump($x);

?>