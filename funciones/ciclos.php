<?php 

//for

for ($i=0; $i <=10; $i++) { 
	echo $i.'<br>';
}

//while

$i=10;
while ( $i >= 0) {
	echo $i . '<br>';
	$i--;
}

//do-while

$i=0;
do {
	echo $i . '<br>';
	$i++;
} while ( $i<= 10);

//foreach para arrays

$names = ['Alex','Cristian','Karen'];

foreach ($names as $name) {
	echo $name . '<br>';
}

//foreach para obtener las llaves del array
 foreach ($names as $key => $name) {
 	echo $key . '-' . $name . '<br>';
 }

?>