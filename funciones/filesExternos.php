<?php  
//require... este a diferencia del include en caso de que el archivo no exista no arrancara la pagina y lanzara un error ya que el archivo es requerido 


//include

include 'condicional.php';

//include once para incluir un archivo solo una vez, para evitar que se incluyan mas veces y  generen errores cuando los archivos tienen funciones 

include_once 'introduccion.php';
echo '<p> Text de flies Externos.php </p>';


//funcion saludo pertenece a introduccion.php
saludo('cristian');

?>