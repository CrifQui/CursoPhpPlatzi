<?php  

//if

$color='yellow';

if($color == 'black'){
	echo 'color es negro';
	echo '<br>';
}elseif ($color == 'white') {
	echo 'color es blanco';
	echo '<br>';
}else{
	echo 'color no es negro ni blanco';
	echo '<br>';
}

// switch

switch ($color) {
	case 'blue':
		echo 'color es azul';
		echo '<br>';
		break;

	case 'red':
		echo 'color es rojo';
		echo '<br>';
		break;

	default:
		echo 'el color es otro';
		echo '<br>';
		break;
}
?>