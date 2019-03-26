<?php 
require_once 'config.php';
$queryResult = $pdo->query("SELECT * FROM users");

?>
<!DOCTYPE html>
<head>
	<title>list Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>List Users</h1>
		<a href="index.php">Home</a>
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Email</th>
			</tr>
			<?php
				while ($row= $queryResult->fetch(PDO::FETCH_ASSOC)) {
					echo '<tr>';
					echo '<td>' . $row['name'] . '</td>';
					echo '<td>' . $row['email'] . '</td>';
					echo '</tr>';
				}
			?>
			
		</table>
	</div>
</body>
</html>