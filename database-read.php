<?php
	include ('db-connection.php');
	if (!$connection) {
		die("Connection failed: ".$connection->connect_error);
		$error = $error."dead connection";
	}

	$query  = "SELECT * FROM contacts ";
	$result = mysqli_query($connection, $query);
?>

<!doctype html>
<html>
<head>
	<title>Contacts</title>
</head>
<body>

	<h1>Contacts</h1>

	<table border>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Message</th>
		</tr>
		<?php
			while($pages = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $pages["id"]; ?></td>
			<td><?php echo $pages["name"]; ?></td>
			<td><?php echo $pages["email"]; ?></td>
			<td><?php echo $pages["phone"]; ?></td>
			<td><?php echo $pages["message"]; ?></td>
		</tr>
		<?php } ?>
	</table>

	<br>
	<a href="./">Back to Home</a>

</body>
</html>

<?php
	mysqli_free_result($result);
	mysqli_close($connection);
?>