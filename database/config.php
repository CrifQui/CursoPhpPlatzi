<?php 

$dbHost = 'localhost';
$dbName = 'cursophp';
$dbUser = 'root';
$dbPassword = '';

try{
	$pdo = new PDO("mysql:host = $dbHost;$dbName", "$dbUser","$dbPassword" );

	//para que cada vez que haya un error en el pdo se lance un error
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
	echo $e->getMessage();
}
?>