<?php 
require_once 'config.php';
$queryResult = $pdo->query("SELECT * FROM users");

?>
<!DOCTYPE html>
<head>
	<title>list Users</title>
</head>
<body>
	<div class="container">
		<h1>List Users</h1>
		<a href="index.php">Home</a>
		<table>
			<th>
				<td>Name</td>
				<td>Email</td>
			</th>
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