  <?php 
//operadores
$var1= 10;
$var2 =3;

//operador de suma
$suma= $var1 + $var2;
var_dump($suma);
echo '<br>';

//operador resta

$resta= $var1 - $var2;
var_dump($resta);
echo '<br>';

//operador multiplicacion

$multiplicacion= $var1 * $var2;
var_dump($multiplicacion);
echo '<br>';

//operador division

$division = $var1 / $var2;
var_dump($division);
echo '<br>';

//operador modulo
$modulo = $var1 % $var2;
var_dump($modulo);
echo '<br>';

// cast (cambiar el tipo de dato)
var_dump((int) $division);


?>