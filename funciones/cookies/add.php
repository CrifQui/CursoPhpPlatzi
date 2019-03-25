<?php  

//Se incrementa el numero de visitas en la cookie count
$value = $_COOKIE['count'];
$value++;

setcookie('count', $value);
?>