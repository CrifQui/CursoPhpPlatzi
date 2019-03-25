<?php

require_once 'config.php';

if (!empty($_POST)) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql="INSERT INTO `users`(`id`, `name`, `email`, `password`) VALUES(:name, :email, :password)";

	$query = $pdo->prepare($sql);
	$result = $query->execute([
		'name'=> $name,
		'email'=> $email,
		'password' => $password
	]);

}


?>

<!DOCTYPE html>
<head>
	<title>Ading User</title>
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
		<?php
			echo $result;
		?>
	</div>
</body>
</html>
