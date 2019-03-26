<?php

require_once 'config.php';

if (!empty($_POST)) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql="INSERT INTO users (name, email, password) VALUES(:name, :email, :password)";

	$query = $pdo->prepare($sql);
	$result = $query->execute([
		'name'=>$name,
		'email'=>$email,
		'password'=>$password
	]);

}


?>

<!DOCTYPE html>
<head>
	<title>Ading User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Add User</h1>
		<a href="index.php">Home</a>
		<form action="add.php" method="post">
			<label for="name"> Name</label>
			<input type="text" name="name" id="name">
			<br>
			<label for="email"> Email</label>
			<input type="text" name="email" id="email">
			<br>
			<label for="password"> Password</label>
			<input type="password" name="password" id="password">
			<br>
			<input type="submit" value="Send">
		</form>
	</div>
</body>
</html>
