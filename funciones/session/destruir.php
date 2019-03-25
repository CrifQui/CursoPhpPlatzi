<?php  
//destruir una session logout
session_start();

//unset elimina datos de la session
unset($_SESSION['counter']);

//session_ destroy elimina la session completa
session_destroy();

?>