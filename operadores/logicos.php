<?php  
$v1=3;
$v2=3;

$v3=2;
$v4=4;

$result= $v1 == $v2;
var_dump($result);
echo '<br>';

$result2= $v2 == $v4;
var_dump($result2);
echo '<br>';

//operador and

$result3 = $result && $result2;
var_dump($result3);
echo '<br>';

//operador or

$result4 = $result || $result2;
var_dump($result4);
echo '<br>';
?>