 <?php

$array =[
	1=> 'b',
	2=> 'c',
	'0'=>'a'
];

$array1= [
	3=> 'd',
	2=> 'e'
];

$array2 =['a','b','c'];

$result = $array + $array1;
var_dump($result);
echo '<br>';

$result2 = $array == $array2;
var_dump($result2);
echo '<br>';

//con el triple igual importa el orden de los componentes del vector

$result3 = $array === $array2;
var_dump($result3);
echo '<br>';

?>