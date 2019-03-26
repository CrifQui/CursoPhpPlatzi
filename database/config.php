<?php 

$dbHost ='localhost';
$dbName ='curso';
$dbUser ='root';
$dbPassword ='';

try{
	$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", "$dbUser","$dbPassword" );

	//para que cada vez que haya un error en el pdo se lance un error
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
	echo $e->getMessage();
}
?>
