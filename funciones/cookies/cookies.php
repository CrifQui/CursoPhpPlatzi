<?php  

//Cookie( NOMBRE, VALOR, TIEMPO DE VIDA)
setcookie('count', '1', time()+3600);
echo '<p> creamos nuestra primera cookie <p>';

?>