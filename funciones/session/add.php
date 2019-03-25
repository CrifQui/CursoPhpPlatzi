<?php  
session_start();

//se añade 1 al contador de session

$_SESSION['counter']++;

echo '<p> Adding 1 </p>';

?>