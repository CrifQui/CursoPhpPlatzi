<?php  

$a =null;
$b = 'x';

//operador null para verificar si es null

$result = $a ?? 'default';
var_dump($result);
echo '<br>';

//operador null para verificar que no es null

$result=  $b ?? 'default';
var_dump($result);
?>